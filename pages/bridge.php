<div id="content">
<style>
#content {
    margin: 1em;
}
#content li {
    margin: 0.7em 0;
}
#content span.handWrapper {
    display: block;
    text-align: center;
}
#content span.handContent {
    display: inline-block;
    text-align: left;
    padding: 1ex 0.7em;
    margin: 1em;
    border: 1px solid #808080;
}
#content span.auctionContainer {
    display: block;
    text-align: center;
}
#content span.auction {
    display: inline-table;
    border-collapse: collapse;
    margin: 2ex 0.7em;
}
#content span.auction > span:first-child {
    background-color: #c0c0c0;
}
#content span.auction > span {
    display: table-row;
    background-color: #ffff80;
}
#content span.auction span span {
    display: table-cell;
    border: 1px solid grey;
    width: 1.5em;
    text-align: center;
}
#content div.beginSectionNumbering {
    counter-reset: section 0;
}
#content h2::before {
    counter-increment: section;
    content: "Section " counter(section) ": ";
}
</style>
<?php
// "rh" means "render hand"
function rh($spades, $hearts, $diamonds, $clubs) {
    return "<span class='handContent'>" .
           "<span style='color: black'>&spades;</span> $spades<br/>" .
           "<span style='color: red'>&hearts;</span> $hearts<br/>" .
           "<span style='color: red'>&diams;</span> $diamonds<br/>" .
           "<span style='color: black'>&clubs;</span> $clubs<br/>" .
           "</span>";
}
// "ch" means "center hand"
function ch($spades, $hearts, $diamonds, $clubs) {
    return '<span class="handWrapper">' .
           rh($spades, $hearts, $diamonds, $clubs) .
           '</span>';
}
function auction($a) {
    $result = "<span class='auction'>" .
              "<span><span>W</span><span>N</span>" .
              "<span>E</span><span>S</span></span>";
    for ($i = 0; $i < count($a); $i++) {
        if ($i % 4 == 0) {
            $result .= '<span>';
        }
        $result .= "<span>{$a[$i]}</span>";
        if ($i % 4 == 3) {
            $result .= '</span>';
        }
    }
    return $result . '</span>';
}
?>
<div class="beginSectionNumbering"></div>
<section id="eval">
<h2>Hand evaluation</h2>
<h3>High card points (HCP)</h3>
The most basic technique for evaluating your hand is to give yourself:
<ul>
<li>4 points for each ace;</li>
<li>3 points for each king;</li>
<li>2 points for each queen;</li>
<li>1 points for each jack.</li>
</ul>
These are called <em>high card points,</em> or <q>HCP</q> for short. There are
40 HCP in a deck.
<h3>Distribution points</h3>
<p>However, we should understand that there is also an advantage to having
imbalanced hands. If you have &hearts;AQxx and your partner has
&hearts;KJxx, so that you have all 10 HCP of the hearts suit, then you can
probably take 4 tricks by leading hearts. (The <q>x</q> represents a card whose
value is too small to be significant.)
However, if you have &hearts;AKQxxx and your partner has &hearts;Jx, then you
can often take up to 6 hearts tricks together: after 4 tricks have been won
with the ace, king, queen, and jack, the opponents will usually have no hearts
left, which means the remaining two small hearts in your hand can each win a
trick. Thus we see that there is an advantage to having a <em>long</em> suit,
beyond just having lots of HCP.</p>
<p>When you are playing in a suit contract, there is an advantage to having
<em>short</em> suits, because once one hand is voided of a suit, it can start
playing trumps. For example, &hearts;A854 opposite &hearts;K932 is probably
only worth 2 tricks, but &hearts;AK9854 opposite &hearts;32 is likely worth
more than 2 tricks (though probably not a full 6 since you may run out of
trumps). Being short in a suit is not helpful in notrump, though. So as a
general rule, we <strong>add points for length in notrump, and add points for
shortness in a suit contract</strong>. These are called <em>distribution
points</em>. Of course, being short in the trump suit
is not a good thing since it implies the opponents have more trumps, so don't
add points for being short in the trump suit.</p>
Usually distribution points are added according to the following rules:
<ul>
<li>Before a suit fit has been found, or if you are planning on being in
notrump, give yourself 1 point for each 5-card suit, 2 points for each
6-card suit, 3 points for a 7-card suit, and so on.</li>
<li>Once a suit fit has been found, take away the length points, and instead
give yourself 1 point for each doubleton suit, 2 points for each singleton
suit, and 3 points for each void suit. (This does not apply to the trump
suit.)</li>
</ul>
<p>Actually, when you are in a suit contract, short suits and long suits
<em>both</em> help you. Consider again the example of &hearts;AKQxxx opposite
&hearts;Jx, with spades as the trump suit this time. You probably can take 6
tricks in hearts without even ruffing, and in fact, will be able to discard
losers from the hand with shorter hearts. Despite this fact, you must remember
(at this stage) not to count both length and shortness points in a suit
contract; only count shortness points. There are some more advanced evaluation
systems in which both length and shortness are counted, but we won't get into
those here.</p>
<p>The sum of HCP and distribution points is called <q>total points</q> or
often just <q>points</q>. Again, in a suit contract, total points equals HCP
plus shortness points, whereas in a notrump contract, total points equals HCP
plus length points.</p>
<h3>The significance of points</h3>
<p>Bridge is a game of taking <em>tricks</em>. The bottom line is that it is
the number of tricks you take, not the number of <em>points</em> you and your
partner have in your hands, that determines your score. The points system is
not a <em>rule</em> of bridge; it is just a way to estimate how many tricks you
and your partner will be able to take.</p>
<p>The number of points you have is not necessarily <em>proportional</em> to
the number of tricks you can take. For example, most of the time, if you and
your partner have at least 25 HCP together, it is possible to make a 3NT
contract (<i>i.e.</i>, take at least 9 tricks out of 13). That is, you can
usually take 69% of the tricks with only 62% of the HCP.
That's partially because the declarer has the ability to coordinate play between
their hand and the dummy hand, thus making their HCP count for more by using
them strategically.</p>
<p>Of course, not all 25-point pairs of hands are alike. Experienced players
understand that proper evaluation of your hand&mdash;that is, making accurate
estimates of its trick-taking ability&mdash;requires more than just adding up
points. However, the subtleties of hand evaluation can only be learned through
a great deal of bridge experience. Thus, beginners will have to rely on adding
up points for now but should pay attention to finer details of hand evaluation
as they play.</p>
</section>
<section id="scoring">
<h2>Overview of duplicate bridge scoring</h2>
<p>The scoring rules of bridge are complicated, but there a few basic rules
that we should go over. It is not possible to understand bidding unless you
understand scoring. After all, the ultimate goal of a bidding system is to
help you score as many points as possible.</p>
<ul>
<li>The suits are worth different amounts of points. Each club or diamond level
is worth 20 points. Each heart or spade level is worth 30 points. Notrump is
worth 30 points per level plus an extra 10 points. For example, 3&hearts; is
worth 90 points (3 times 30) whereas 2NT is worth 70 points (3 times 30 plus
10). Because of this, your partnership will usually want to play in hearts or
spades instead of clubs or diamonds. Hearts and spades are called the
<strong>major suits</strong> whereas clubs and diamonds are called the
<strong>minor suits</strong>. Sometimes we may want to refer to a major suit
without specifying which one; in that case, the uppercase letter <q>M</q> is
used. Similarly, lowercase <q>m</q> means a minor suit. For example, if we say
your partner bids 1m in some hypothetical scenario, it means your partner bids
1&clubs; or 1&diams; and it was not important to specify which.</li>
<li>If you make overtricks (you win more tricks than the contract requires) then
they are scored at the same rate as regular tricks. So for example, bidding
2&spades; and winning 9 tricks is worth 60 points for making the contract plus
another 30 points for the extra spade level. Bidding 3&spades; and winning 9
tricks is also worth 90 points. But bidding 4&spades; and winning only 9 tricks
means the contract was defeated, and the opponents would get points instead of
your side.</li>
<li>If you make a contract with a base value of 100 points or more, you get a
special 300 point bonus. (If vulnerable, the bonus is 500 points instead of
300.) This is called a <strong>game level contract</strong>. A contract of
4&hearts; or 4&spades; has a base value of 120, so it is game level. A contract
of 5&clubs; or 5&diams; has a base value of 100, so it is game level. A
contract of 3NT has a base value of 100 (3 times 30 plus 10), so it is also
game level. You only get the game bonus if you actually <em>bid</em> high
enough. For example, bidding 3&spades; and winning 10 tricks does not get the
game bonus, whereas bidding 4&spades; and winning 10 tricks (just barely making
the contract) does get the game bonus. Of course, you get no game bonus if you
fail to make your contract.</li>
<li>Since making a game level contract is worth so much, <strong>an
important goal of the bidding system is figuring out between you and your
partner whether making a game level contract is possible.</strong> And if you
and your partner can make a game level contract, then <strong>another important
goal is figuring out how to select the best game level contract to
bid.</strong> Remember, you have five choices: 5&clubs;, 5&diams;, 4&hearts;,
4&spades;, 3NT.</li>
<li>Selection of the appropriate game level contract should be made
according to the following guidelines:<ul>
<li>Usually if you and your partner hold at least 25 points together, it is
possible to make a game level contract. Therefore it is important for the
bidding system to accurately communicate strength so you and your partner can
figure out whether you have 25 points between the two of you.</li>
<li>If you and your partner have a lot of hearts&mdash;generally, at least 8
between both of you&mdash;it's usually easier to make
a 4&hearts; contract than a 3NT contract. Likewise 4&spades; is usually easier
to make than 3NT if you have lots of spades. So if you and your partner have
decided to go to game, and you have enough of a major suit between you, you
will want to play in 4 of that major. The bidding system must be designed to
help you figure out not only whether you have 25 points, but also whether you
have enough hearts or spades.</li>
<li>If you and your partner have decided to go to game but you can't go to
4&hearts; or 4&spades; because you don't have enough of the suit, then usually
it is easier to make 3NT than 5&clubs; or 5&diams;. But there is a danger of
being in 3NT. If for example you have only a few small hearts and your partner
also has only a few small hearts, then the opponents can just <q>run
hearts</q>, that is, play all their hearts at the beginning and win a bunch of
tricks. Once they win 5 tricks, the contract is defeated since there are only
8 tricks left for your side to win, and you need 9 to make the contract. So
before going to 3NT, you should make sure you have <q>stoppers</q> in all four
suits, meaning that you have some card that can eventually win so your side can
get back in control.</li>
<li>If you are deficient in hearts and spades, and have unbalanced hands so
that 3NT is dangerous, you must have either a lot of clubs together or a lot of
diamonds together. So in those cases, you can try to go to 5&clubs; or
5&diams;. Since this requires getting 11 out of the 13 tricks, it's not so
easy, so going to 5&clubs; or 5&diams; should be a last resort when you've
figured out that the other game level contracts wouldn't be successful.
Actually, sometimes when you only have 25 points together, you just won't be
able to make 5&clubs; or 5&diams; even if you have a lot of clubs or diamonds.
In those cases you might have to stop at the 4 level&mdash;you won't get the
game bonus, but at least you'll get some points. You would need to have
something like 29 points together in order to have an excellent chance of
making 5&clubs; or 5&diams;. With only 25, it's not so certain.</li>
</ul></li>
<li>If you and your partner realize that you don't have 25 points together,
you should usually try to put the brakes on the bidding. There is no point in
going higher. For example, remember that 2&spades;+1 is worth the same as
3&spades;. There is no bonus for bidding a higher contract, unless it is at
least game level.</li>
<li>When you fail to make your contract, the opponents score 50 points per
undertrick. For example, bidding 4&hearts; but winning only 8 tricks means you
missed by two tricks, so the opponents score 100 points. However, when your
side is vulnerable, undertricks cost 100 points each rather than 50. If the
opponents have doubled your contract, the penalties are even higher.</li>
<li>When you bid and make a contract with a base value of less than 100
points&mdash;so not a game level contract&mdash;this is called a
<em>partscore</em> contract and you get a 50 point bonus for making it. So
for example bidding and making 2&clubs; is actually worth 90 points, not 40.
This gives you more of an incentive to try to make a contract rather than
defeating the opponents' contract. For example, if opponents have bid 1&spades;
and you think you can bring them down 1 trick, you would get 50 points from
doing that. But if instead you competed in the auction and bid up to 2&clubs;
and made that contract, you would get 90 points (not 40), which is better.</li>
<li>Even when you and your partner don't have enough for game, you will still
usually be able to score more tricks with a 8 card suit fit (8 cards of one
suit between the two of you) than you will in notrump. Therefore it is useful
for the bidding system to still help you try to find a 8 card <em>major</em> fit
even at partscore. For example, if you have enough points together so that you
could make a 1NT contract, but you also have an 8 card fit in spades, then you
will probably be able to make a 2&spades; contract, and choosing 2&spades;
instead of 1NT will score your side 110 points instead of 90, assuming you
make the contract.</li>
<li>A 2m contract scores 90 points when made, just like 1NT. If you and your
partner have no 8-card major fit, and you also don't have enough strength to
make 3NT or 5m, then you'll often end up in 1NT or 2m. If you have a 8-card
<em>minor</em> fit, then sometimes 2m is a <q>better</q> contract than 1NT
(though not always). If you don't have a 8-card minor fit, 1NT is almost always
a better contract than 2m. (By <q>better</q>, we mean likely to yield a higher
score. A contract that can be made is better than a contract that will go down,
but sometimes both contracts will make and one will score higher than the other
due to overtricks.) Even if 2m is a better contract than 1NT, the benefit of
playing in 2m is usually slight. Therefore, finding minor partscores is usually
not a priority. Staying in a relatively safe 1NT contract is usually better
than pushing the bidding too high to search for a minor suit fit.</li>
</ul>
</section>
<section id="system">
<h2>Basic principles of bidding systems</h2>
<p>Bidding is the most difficult topic for beginning bridge players to learn.
This was not always the case. In the first half of the 20th century, bridge was
a casual game, popular first among socialites, and later the broader American
population, reaching the peak of its popularity in the 1940s. Over the years,
other activities replaced bridge as a vehicle for young people to socialize.
The popularity of bridge, though much less now than at its peak, endures
because of its vast strategic depth, which has hooked generation after
generation of young people with a particular disposition. Each generation
brought new strategic innovations, some of which withstood the test of time and
became <i>de rigueur</i> for the next generation learning to play bridge.
Consequently, it is common to sit in a random seat on <em>Bridge Base
Online</em> and discover that your partner's profile contains two dozen code
words like <q>supX, invm, fsf, nmf, j2nt</q> and so on. There is a good reason
for this, but it is not possible for beginners to learn all these conventions
at once, particularly when they don't even understand the fundamental
principles of bidding. There is just too much to memorize!</p>
<p>This page aims to explain both the principles and objectives of bidding, and
the particular conventions that arise under them, including the reasoning for
each, in a manner that should be easy for the logically-minded beginner to
understand. My hope is that learning the system described on this page doesn't
feel like memorization. Instead, it should feel like reading a story about how
people used logical reasoning to design a bidding system that would work well
in a wide variety of situations.</p>
<h3>Terminology</h3>
<p>During the auction, players take turns making <em>calls</em>. If your call
is a contract (such as 1NT), then you are making a <em>bid</em>. The other
three possible calls are <q>pass</q>, <q>double</q>, and <q>redouble</q>. The
first call in an auction other than <q>pass</q> is called the <em>opening
bid</em>. If your partner opens and you then make a bid, you are said to be
<em>responding</em>; your partner is opener and you are responder. After that,
if the opener bids again, they are making a <em>rebid</em>; same for the
responder.</p>
<p>If you or your partner opens, but then one of the opponents then makes a bid,
they are said to be <em>overcalling</em>. A bid usually has a different meaning
as an overcall than it does as an opening. More generally, the meaning of a
call depends on the entire context of the preceding calls in the auction, so it
is important to pay attention and particularly to distinguish between opening
bids and overcalls! Besides overcalling, it's also possible that one of the
opponents will double after you or your partner opens. The first opponent to
either overcall or double after your side opens is called the
<em>intervenor</em>. If the intervenor's partner subsequently bids, doubles, or
redoubles, they are the <em>advancer</em>.</p>
<p>An <em>honor</em> card is a card that is 10 or higher. A card that is 9 or
lower is called a <em>spot</em> card. The set of cards that you have in a
particular suit in your hand is called a <em>holding</em>. Therefore, a hand
always consists of four holdings (if you are void in a suit, the holding is the
empty set). The set of four hands dealt to you and the other players is called a
<em>deal</em>. Sometimes a deal is also called a <em>board</em>.</p>
<h3>Natural and artificial bids</h3>
<p>In the early days of contract bridge, bidding was easy to understand because
most bids had roughly the meaning that you would expect: if someone bid a suit,
it meant they had length in that suit and usually meant they were interested in
playing in that suit; bidding showed more strength than passing; bidding higher
showed more strength than bidding lower; double meant you expected the
opponents to go down; redouble meant you expected to make the contract even
though the opponents doubled you. This is called <q>natural</q> bidding.</p>
<p>On the opposite extreme, in the 21st century, it is common for players to
bid a suit when the information they are communicating actually has nothing to
do with their holding in that suit! For example, a very common convention, which
we will discuss later, involves bidding 2&hearts; in order to tell your partner
that your hand contains 5+ <em>spades</em>. This is called an <q>artificial</q>
bid. A double or redouble that does not have its natural meaning can also be
thought of as an artificial call.</p>
<p>All partnerships use natural bids, and most partnerships also have several
agreements to use artificial bids. A particular agreement about the meaning of
an artificial bid, and what subsequent bids after the artificial bid mean, is
called a <em>convention</em>. For example, the <em>Stayman convention</em> is
an agreement between partners that when one partner opens 1NT and the other
responds 2&clubs;, the responder has some 4-card major holding and is asking
the opener if they also have a 4-card major holding. Assuming that a partnership
has agreed to use the Stayman convention, the opener in this situation is
obligated to bid 2&hearts; or 2&spades; if they have a 4+ card major holding,
or 2&diams; if they don't. The Stayman convention therefore entails not only a
specific meaning for this 2&clubs; bid, but also a specific meaning for the
subsequent artificial bid of 2&diams; or the subsequent natural-ish bids of
2M. (The vast majority of partnerships use the Stayman convention. We will cover
it in detail in a later section, so don't bother trying to memorize it
now.)</p>
<p>In most conventions, an artificial call is <em>forcing</em>, which means that
the partner of the player who makes the artifical call is forbidden to pass
(they are <em>forced</em> to bid). Some natural bids are also forcing. We will
discuss the reasons for this later.</p>
<h3>Bidding agreements</h3>
<p>Regardless of whether your bids are natural or artificial, it is crucial
that you and your partner share a common understanding of what each bid means.
What exactly that understanding <em>is</em>, though, is up to the two of
you! The set of such agreements that you and your partner have about the
meanings of bids is called your <em>system</em>. In tournaments, you and your
partner will write down your system on a <em>convention card</em> so that your
opponents will also be able to understand your bids.</p>
<p>For example, a very common agreement used by partnerships in the United
States and Canada is that an opening bid of 1M means the opener has at least
<em>five</em> cards in the suit bid. However, this is not universal, and some =
partnerships have an agreement that this would only promise at least
<em>four</em> cards in the suit. Imagine that your bridge partner were someone
you never met before, and you didn't discuss what such a 1M bid means.
Your partner could bid 1M, you could think it meant five, look at your own hand
and see 3 cards in that major, and mistakenly believe that a 8-card fit exists,
when in actual fact your partner may only have 4 cards in the major suit. This
would cause some serious problems. Thus, we can see that even if you and your
partner don't use any conventions, you still need to have agreements about the
meanings of natural bids.</p>
<h3>Standard American and 2/1 systems</h3>
<p>Older generations of American bridge players overwhelmingly used some
variation of the <q>Standard American</q> system. In Standard American, for
example, a 1&hearts; opening bid shows at least 5 hearts, a 1NT response shows
6&ndash;10 HCP, and a 2&diams; response shows at least 4 diamonds with 10+ HCP.
Among younger players, <q>two over one</q> (2/1) systems are more popular. In
a 2/1 system, the 1&hearts; opening still shows at least 5 hearts, but now a
1NT response shows 6&ndash;12 HCP and is forcing, and a 2&diams; response shows
13+ HCP and is also forcing.</p>
<p>Although I'm a young man, I learned bidding from a book called
<em>Standard Bidding with SAYC</em>. I would recommend this book to others,
except that it teaches Standard American, rather than 2/1. So I wrote this page
for beginners to understand how to use a 2/1 system.</p>
<h3>The design of bidding systems</h3>
<p>All new players will have to ask themselves the question: why should I use
one bidding system rather than another? The answer is that the main purpose of
a bidding system is to help you and your partner reach a contract in which
you'll score as many points as possible. Each bid communicates information to
your partner and, if all other players pass, places the contract. You want to
communicate with your partner as efficiently as possible, but the only way to
do so is through your calls. Therefore, you and your partner should try to find
ways to assign meanings to your calls that cover the most common and useful
pieces of information that you would want to communicate during typical
auctions. If you have been playing a certain bidding system, and noticing that
partnerships that play other bidding systems have tended to reach better
contracts and score more points than you, it makes sense to have a discussion
with your partner about whether you should incorporate some conventions that
other partnerships use into your own system.</p>
<p>In the following sections of this page, I'm going to describe the agreements
that I usually play with my bridge partners, but moreover, I will explain the
problems that each agreement is intended to solve, or, more broadly, why each
agreement is useful. I believe that if you understand the reasoning, the system
will make sense, and you won't need to memorize as much.</p>
</section>
<section id="1open">
<h2>Opening bidding at the one level</h2>
<h3>Strength needed for an opening bid</h3>
<p>It is important that you open every hand with 13+ HCP. That is, if your hand
has 13+ HCP, it's your turn, and no one else has bid yet, you should bid. The
reason for this is that if you have 13+ HCP and your partner also has 13+ HCP,
then there is probably a game contract that you can make on the current deal.
(Recall that the threshold for making a 4M or 3NT contract is around 25+ total
points, so if each of you has 13+ HCP, you'll have 26+ total points before even
counting distribution points.) If both of you pass with 13 HCP, the opponents
will probably pass as well, and you'll get a score of zero for the board rather
than a positive score from bidding and making a game.</p>
<p>There is no rule in bridge that says a hand with 13+ HCP must be opened. I
a just saying that if you and your partner had an agreement that only hands
with 14+ HCP would be opened, you would be shooting yourselves in the foot.
You have the freedom to make that kind of agreement, but you shouldn't. You
should have agreements that maximize your chances of getting as many points as
possible. So, you and your partner <em>should</em> have an agreement on how
much strength warrants an opening bid, and you <em>should not</em> set the
threshold to be higher than 13 HCP.</p>
<p>You <em>could</em> have an agreement that any hand would be opened, no
matter how weak. However, this would also be a bad idea. Suppose for example
that you have 4 HCP. The expected number of HCP that each of the other three
players has is then 12. So on average, you and your partner will have 16 HCP
together. With 16 HCP, there's probably no contract that you can make. So
whenever your opponents have good hands, they'll double you and you'll lose a
few hundred points. Not a wise system to use.</p>
<p>Besides that, the wider the point range is for a bid, the less information
the bid conveys. If you could open both very weak and very strong hands, then
your partner, upon seeing your bid, would know nothing about your hand
strength! On the other hand, if you have a system where only 13+ HCP hands are
opened, then either an opening bid or pass would tell your partner something
about your hand. A bid would tell your partner that you have 13+ HCP while a
pass would tell them that you have 12&minus; HCP. The more information you and
your partner can exchange during a typical auction, the better you'll be at
finding the right contract and maximizing your score.</p>
<p>You might be thinking, <q>what if my hand is weak but I want to give my
partner information about distribution?</q> But usually you needn't be in a
hurry. Pass, and wait for your partner to open. Then, you'll have an opportunity
to respond. When you respond, your partner will know that you didn't have enough
strength to open, but they'll also have information about your distribution that
you'll convey with your response.</p>
<p>With all that being said, most players nowadays use the <strong>Rule of
20</strong>, which states that you can open if the sum of your HCP count and
the lengths of your two longest suits is at least 20. For example, with 12 HCP
and a 4432 distribution, you can open. If you forget the rule of 20, just
remember to open with 13 <em>total</em> points or more. (Remember to count
points for length rather than shortness, since you haven't found a fit yet.)
The Rule of 20 is a way of taking distribution into account. In the first
section, we discussed how distributional hands have more trick-taking potential
than flat hands. So if your hand has good distribution, even with less than 13
HCP, you might want to open it. The Rule of 20 is an agreement that tends to
work well, so that you and your partner will open hands that provide roughly
half of the trick-taking potential needed to make a game. We will use the Rule
of 20 for the remainder of this page.</p>
<h3>Choice of suit to open</h3>
<p>As previously discussed, most partnerships use the Rule of 20 to decide
when to make an opening bid. But, assuming you have a hand that is strong
enough to open, which suit should you bid? Here, already, there is more variety
between partnerships.</p>
<p>The most natural agreement you might have with your partner is to simply open
whichever suit you have the longest holding in. For example, with 4 spades and
3 of each other suit, and 13 HCP, you could open 1&spades;. However, most
partnerships don't use that kind of system. The reason is that the four suits
are not all equally important. Finding a 8-card major fit, if possible, is very
important for maximizing your score. So your bidding system should make it a
priority to communicate information about your major suit holdings. The mere
fact that a minor suit holding happens to be longer than a major suit holding
does not make it more important.</p>
<p>The 2/1 system (as well as Standard American, incidentally) is a
<q>5 card major</q> system, which means that you and your partner agree that
an opening bid of 1M shows a 5+ card holding in that major. Thus, when playing
2/1, if you see your partner open 1&spades;, and you yourself hold at least 3
spades, you immediately know that a 8-card spade fit has been found. On the
other hand, if you hold 3 spades and you see your partner open 1&clubs;, you
immediately know that your partner has 4 or fewer spades, so you and your
partner do not have an 8-card spade fit. This is where the value of the 5 card
major agreement lies: <strong>it provides the most important information up
front, to help you determine whether an 8-card major fit exists.</strong> This
is a theme that will recur again and again. Don't view the set of agreements
that constitute the 2/1 system as merely something to memorize. If you and
your partner never knew that the 2/1 system existed, but you simply played a
lot of hands together using the <q>open your longest suit</q> agreement, you
would gradually discover that this would cause you to miss a lot of 8-card
major fits, reducing your score. You would eventually design something like the
5 card major agreement, and you would never forget it because you would remember
how it was necessary in order to solve the problem of finding 8-card major
fits.</p>
<p>If you have opening strength but no five-card major, then choose the longer
of your two minor suits to open with. If you have opening strength and 5+ cards
in <em>both</em> majors, usually you should bid 1&spades; unless your heart
holding is even longer. We will discuss the reasons for this later. Also note
that the 1NT opening bid is a special case, which we will cover later.</p>
<h3>4-card major systems</h3>
<p>The vast majority of American partnerships use a 5-card major system similar
to the one that we will be using. However, in some countries, 4-card major
systems are more common. The ACOL system, popular in England, is a 4-card major
system. At risk of stating the obvious, a 4-card major system conveys different
information from a 5-card major system:</p>
<ul>
<li>As previously mentioned, in a 5-card major system, when you see your partner
open 1M, and you have 3 cards in that major, you immediately know that a 8-card
fit exists. In a 4-card major system, if you see your partner open 1M, and you
have 3 cards in that major, you don't know whether a 8-card fit exists yet.
Perhaps your partner has 5 of their major, but since the <em>bid</em> only
conveys the information that they have 4+, you need further bidding to explore
whether a fit exists.</li>
<li>In a 5-card major system, when you see your partner open 1m, and you have a
4-card major, you don't know whether a 8-card fit exists yet; perhaps your
partner has 4 cards in your major, yet was not able to open that major,
according to your agreement. Further bidding is required to determine whether
a 4&ndash;4 fit exists in that suit. On the other hand, in a 4-card major
system, your partner wouldd bid their 4-card major right away and you'd
immediately know that a 8-card fit exists.</li>
</ul>
<p>We thus see that 5-card major and 4-card major systems each have advantages
and disadvantages. We will use a 5-card major system, but not because it is
clearly better than a 4-card major system. On the other hand, almost no one
would play a 6-card major system, because such a system would not be efficient
at discovering either 4&ndash;4 or 5&ndash;3 major fits. Sure, it would be
great at finding 6&ndash;2 or 6&ndash;3 major fits, but those are much rarer. A
bidding system that's great at describing rare situations, but not very good at
common situations, will not lead to great scores in the average case.
Similarly, a 3-card major system would only be good at describing hands where
you <em>don't</em> have a 3-card major holding: those rare hands where you have
less than 3 cards in both major suit holdings. In hands where you do have a
3-card major, opening it would leave your partner wondering whether you actually
have 3, 4, or 5+ of your major suit. In other words, in the most typical case,
it would give a very imprecise description, which would not be very helpful for
finding a 8-card major fit and scoring as many points as possible.</p>
<h3>Examples</h3>
What opening bid should be made with the following hands? That is, if you are
dealt the following hands, and everyone before you has passed, what should be
your call?<br/>
<span class="handWrapper">
<?=rh('75', 'AK97', 'A62', 'Q973')?>
<?=rh('AK', 'KJT98', 'AQJ3', 'T4')?>
<?=rh('863', 'AK753', '72', 'JT4')?>
<?=rh('A42', 'QT92', 'QJ9', 'A72')?>
</span>
<p>The first hand should be opened 1&clubs; since it contains no 5-card major
holding, and clubs is the longer of the two minor suits.</p>
<p>The second hand should be opened 1&hearts; since it contains a 5-card heart
holding. After you open 1&hearts;, if your partner has 3+ hearts, they will
immediately know that a 8-card heart fit has been found.</p>
<p>The third hand should not be opened, since it's too weak. It contains 8 HCP,
its longest holding has 5 cards, and the second longest has 3 cards. The sum is
16, which is much less than the threshold of 20 required to open.</p>
<p>The fourth hand should be opened 1&clubs; (if you picked 1&diams;, that's
also an acceptable answer.) Even though you only have 3 of each minor suit, you
must bid a minor suit because there is no 5-card major for you to bid. Thus,
if you see your partner open 1m, keep in mind that they might only have a 3-card
holding in that minor suit. However, most of the time, we don't care that much
about our partner's minor suit holdings; major suits are much more important.
We will see in the next section how, even when your partner opens 1m, you may
still find a 8-card <em>major</em> fit. Once an 8-card major fit is found, you
almost always want to play a contract in that major suit.</p>
</section>
<section id="1resp">
<h2>Subsequent one-level bidding</h2>
<p>If your partner has opened at the one-level, you know they have at least 12
points. By responding to their bid, you have the opportunity to communicate
information to them about <em>your</em> hand. Let's think about what
information we would most want to communicate.</p>
<p>Remember that one of your goals is to figure out whether you and your
partner have together enough strength to go to game (25 points). Sometimes,
after your partner has opened, you'll immediately know that you do have enough
strength, because your hand has at least 13 points. You need to let your
partner know that you have 13+ points so that partner will know to continue
bidding until a game-level contract is agreed on. We'll cover how to do that
later on.</p>
<p>However, that doesn't mean that if your partner has opened and you have less
than 13 points, you should pass. After all, your partner has promised <em>at
least</em> 12 points, not exactly 12 points. Let's suppose you only have 8
points. Then, there is still a chance for game, if your partner has at least 17
points. If you pass now, you foreclose on that possibility.</p>
<p>So it is desirable to have a system where you can respond even when you have
less than 13 points, in the hopes that your partner will have more points than
they initially promised. But does that mean you should have a system where you
will respond even with 0 points? No, because there are two problems with
that:</p>
<ul>
<li>When you have 0 points, for all you know, you and your partner together
might have only 12. It's too dangerous to support your partner's suit by
raising to the two level; there's a high probability of simply not being able
to make the contract. Even if you just make another bid at the one-level, you
must be aware that if you and your partner don't agree on a trump suit, you
will end up in 1NT, and there is not a snowball's chance in hell that you can
make a 1NT contract with 12 combined points.</li>
<li>Even if your partner has a very good hand, if you agreed that you would
respond even with 0 points, that means your response doesn't tell your partner
anything about the strength of your hand. What if your partner had 20 points
and only needed you to have 5 in order to go to game? Your response wouldn't
tell your partner whether this would be possible or not.</li>
</ul>
<p>A common design principle of bidding systems is that, if there's a certain
total number of points that you and your partner are hoping to have, you need a
way of telling your partner that, in addition to what they already know you
have, you also have enough extra points as to close the gap <strong>at least
halfway</strong>. So, if your partner has opened, showing 12+ points, then 13
more points beyond what has been shown so far are needed to make game. Those 13
additional points could be in your hand and your partner's hand. But for your
part, you need to have some bid that your partner will understand as showing 6+
points (roughly half of 13). So, after you make that bid, if your partner has
the other half&mdash;7 more points than they originally promised (for a total of
19)&mdash;then they can bid a game.</p>
<p>So we'll use a system where <strong>you respond if you have at least 6
points.</strong> But what should you respond with? For that, remember that our
other goal is to figure out whether we have a 8-card major fit. If your partner
has opened 1M (the uppercase <q>M</q> means a major suit) and you have 3 of
that suit, you know you have a 8-card major fit. If that isn't the case, or
partner opened 1m, the system you follow for your subsequent bidding should
serve the goal of determining whether a 8-card major fit exists.</p>
<p>If a 5-3 fit (with opener having 5 of the major, and responder having 3)
does not exist, then maybe a 4-4 fit does exist. So if your partner has opened
1&hearts; and you have four spades but less than three hearts, you could bid
1&spades; and hope that your partner also has four spades (and will show
support). If your partner has opened 1m, and you have either four hearts or
four spades, a similar principle applies: you can show your four-card major
suit and hope for support from partner. If you have both 4 hearts and 4 spades,
and partner has opened 1m, remember to always bid 1&hearts; first. If you were
to bid 1&spades; first and your partner also had 4 hearts, you would miss the
4-4 hearts fit!</p>
<p>For example, if your partner has opened 1&hearts; and your hand is:
<?=ch('8764', '3', 'K862', 'K942')?>
then you should respond 1&spades; to show that you have at least 4 spades.</p>
<p>If your partner has opened 1&diams; and your hand is:
<?=ch('KQJ4', '8643', '652', '42')?>
then you should respond 1&hearts;. If your partner has 4 hearts, they will then
realize that you have a 8-card fit in hearts. If your partner doesn't have 4
hearts, but they do have 4 spades, then they will bid again with 1&spades; and
you will realize that you have a 8-card fit in spades. So by bidding the
lower 4-card suit first, which is called <q>bidding up the line</q>, you ensure
that as long as you have a 4-4 fit in either hearts or spades, you will find a
4-4 major fit.</p>
<p>Now suppose we have the following auction:
<span class="auctionContainer">
<?=auction(array('P', '1&diams;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', ''))?>
</span>
where you are sitting south and your hand is:
<?=ch('A5', 'T873', 'T82', 'KQT3')?>
That is, you already showed your partner your 4-card heart suit, but your
partner didn't have 4 hearts, and went up to spades, but you don't have a
4-card spade suit. You don't want to play in a spades contract, since for all
you know, the opponents could have 7 of the 13 spades. You also can't support
your partner's spades. You guys haven't found a suit fit, so you'll need to
play in notrump. So in this auction, you would respond 1NT.</p>
<p>Let's rearrange the above hand so that you only have 3 hearts and 3 spades:
<?=ch('A53', 'T87', 'T82', 'KQT3')?>
If your partner opens 1&clubs; or 1&diams;, then you have nothing to say.
There is no point in showing a 3-card major suit, because you already know your
partner doesn't have 5 of either major. So you would respond 1NT right away,
telling your partner that you have at least 6 points but no major suit fit.</p>
So in summary, the basic system for subsequent bidding after a 1-level
opening is:
<ul>
<li>If you're the responder, only respond with at least 6 points.</li>
<li>If you've discovered a 8-card major fit, show support. Otherwise continue
showing other suits.</li>
<li>If you haven't found a 8-card major fit yet, bid 1 of the cheapest
available major suit you have with at least 4 cards.</li>
<li>If you can't support your partner's suit and you have no more 4-card major
suits left to bid, then bid 1NT. Usually, this lets your partner know that the
two of you do not have a 8-card major fit.</li>
</ul>
<p>There are exceptions to these rules, however. The 1NT <q>I give up</q> bid is
used for minimum hands. For example, if your partner opened and you had 13
points but no fit with your partner, you wouldn't bid 1NT, because your partner
might pass and game would be missed. Different bids must be used to
show stronger hands. These will be covered in later sections.</p>
<p>Also, you might be wondering what happens if opener has 3 of a major suit
and you have 5, rather than the other way around. Can the system accommodate
this situation and provide a way for you to still discover your 8-card fit?
This is an advanced topic. For now don't worry about it.</p>
</section>
<section id="support">
<h2>Supporting a major suit</h2>
<p>In section 4, we went over how a 8-card major fit can be found. For example,
if your partner opens 1&spades; and you have three spades, you know that you
have at least 8 spades together. However, your partner doesn't know that yet.
If you open 1&clubs; and your partner responds 1&hearts;, and you realize that
you also have 4 hearts, again, you know that you have a 8-card fit in hearts,
but your partner doesn't know that yet. In order to make sure both of you are
aware of your 8-card fit, <strong>when you have a fit for a suit your partner
bid, you should also bid that suit.</strong> That's called <q>showing
support</q>. Once you've shown support, the two of you have reached a
<q>suit agreement</q>. As a general rule, once you've agreed on a major suit,
you know for sure that you want to try to play a contract in that suit.</p>
<h3>Showing support with a minimum hand</h3>
<p>As discussed in section 4, when your partner was the opener, you should only
respond with at least 6 points. Note that once an 8-card fit is found, you
should reevaluate your hand with distribution points for <em>shortness</em>
rather than length. For example, if your partner has opened
1&spades; and you have this hand, you have 7 points and you should bid
2&spades;:
<?=ch('7543', 'AJ54', '3', '9764')?>
</p>
<p>If <strong>you</strong> were the opener and now you want to show support for
your partner's 4-card major suit, you don't need to have any extra strength.
For example, if you opened 1&clubs; with this hand, which contains 13 points
and is therefore a <q>minimum</q> opener:
<?=ch('A42', 'QT92', 'QJ9', 'A72')?>
and your partner responded 1&hearts;, showing 4 hearts, then you can bid
2&hearts; to show support for hearts.</p>
<p>When you show support by raising to the two level, the partnership has at
least 18 points together, but most likely a few more. Generally, having 20
points together is enough to make a two-level contract (8 tricks). That's
because you set the trump suit to be a suit that you and your partner have,
which gives you an advantage in trick-taking compared to the defenders (your
opponents). Even with exactly 18 points, you still have a chance of making the
contract.</p>
<p>As discussed previously, when opener finds out that their partner has 6+
points, and a major suit fit is established, opener can raise to the 4 level
if they themselves have at least 19 points, since the partnership then has a
total of 25+. This auction is a fairly typical one:
<span class="auctionContainer">
<?=auction(array('P', '1&spades;', 'P', '2&spades;',
                 'P', '4&spades;', 'P', 'P',
                 'P', '', '', ''))?>
</span>
assuming that you are sitting north, and your hand looks something like this:
<?=ch('AKJT8', 'K96', 'T9', 'AK9')?>
You have 18 HCP and 1 distribution point in diamonds, so you have 19 total
points. Once partner has responded 2&spades;, you know that you have 25+ points
together and a 8-card fit in spades, so you waste no time in going to game.</p>
<h3>Showing support with an invitational hand</h3>
<p>If your partner has opened and your hand is significantly better than 6
points, it's also important to communicate your higher strength. What happens,
for example, if your partner opened 1M with 15 points and you have 10 points?
If you simply bid 2M, then your partner will probably pass since for all they
know, you might only have 6. Then, game will be missed! How can you
communicate your better-than-minimum hand to your partner? Obviously, you will
have to bid something other than 2M.</p>
<p>Here is a general principle of bidding: if you have a bidding system
where you haven't assigned a meaning to a particular possible bid yet, then you
should consider assigning a meaning to it, otherwise you are simply foregoing
an opportunity to communicate information to your partner. In our case, so far
we have only covered one-level responses, a raise to the two-level, and a raise
to the four-level. So far we haven't assigned any meaning to a three-level bid.
Perhaps we should do that now.</p>
<p>The most natural solution is that you still bid your partner's suit to show
suit agreement, but since you have a better hand, you can get away with going
to 3M instead of 2M. Then your partner can decide whether or not to go to 4M.
In effect, your 3M bid <em>extends an invitation</em> to your partner to go to
game, which your partner can either accept or decline.
If your partner chooses not to go to 4M, the two of you will probably have
enough strength together to make the 3M contract. Generally, the 3M response is
used when you have 10 to 12 points. This is also called a
<strong>limit raise</strong> because of how it precisely limits the strength
of your hand.</p>
<p>Thus, if your partner opened 1&spades; and you have the following hand:
<?=ch('KT93', 'K63', 'KT2', 'J63')?>
then your response would be 3&spades;. With at least 15 points, your partner
would then go up to 4&spades;. With only 12&ndash;14, partner would pass, and
would play the 3&spades; contract. You'd have at least 22 total points and a
8-card spade fit, which is most likely good enough so that the 3&spades;
contract is makeable.</p>
<p>Likewise, with the following hand, where you are sitting south:
<?=ch('KT93', 'K632', 'KT', 'J63')?>
a possible bidding sequence begins:
<span class="auctionContainer">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', '3&spades;'))?>
</span>
Here, you jump raise to 3&spades; once the 8-card spade fit is found.</p>
<p>The opener can also be the one to extend an invitation. If for example you
have the following hand and are sitting north:
<?=ch('AJ8', 'AJ54', 'KQ', 'J63')?>
then the auction might start like this:
<span class="auctionContainer">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '3&hearts;', '', ''))?>
</span>
Here, you make the jump raise to 3&hearts; because you have 17 points, which is
significantly above typical opening strength. Generally, an invitational jump
raise is made by the opener with 16 to 18 points. Responder can then raise to
4&hearts; if they have at least 9 points.</p>
<p>Of course, there is still a gap here. If you made an
invitational jump raise with 17 points and your partner had 8 points, they
would only know that you have 16 to 18 points, so they would only know that you
have 24 points together&mdash;not quite enough to go to game. Well, no system
is perfect. All you can do is design a system that will help you get to game
most of the time. Some cases will fall through the cracks.</p>
<p>To recap, the general rule here is to make an invitational bid to
communicate more than minimum strength once a suit fit has been found. That
holds for both the opener and responder. For opener, invitational strength is
16 to 18 points. For responder, it's 10 to 12 points. Whether you're opener or
responder, you should also be prepared to receive an invitation from your
partner. When that happens, determine whether or not you want to go to game,
based on your hand's point count and the point count your partner is
communicating.</p>
<h3>Showing support with a game-forcing hand</h3>
<p>If you had the following hand, you would open 1&clubs;:
<?=ch('AKJT', 'K96', 'T9', 'AK98')?>
If your partner responds 1&spades;, there's no sense beating around the bush;
with 19 total points, you already know you have enough for game, so you can
directly bid 4&spades;. This is a <em>double jump raise</em>, since two levels
are being skipped.</p>
<p>You can also double jump raise as responder with at least 13 points, since
if you have 13 and your partner opened (showing 12+) then you know you have
25+. For example, with the following hand, where you are sitting south:
<?=ch('KT93', 'K632', 'KT', 'A63')?>
a possible bidding sequence is:
<span class="auctionContainer">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', '4&spades;'))?>
</span>
</p>
</section>
<section id="2resp">
<h2>Subsequent bidding at the two-level and higher</h2>
In section 4, we described how to try to find a 8-card major fit by bidding
at the one level. If this procedure fails, then you end up in 1NT. There are a
few problems with this:
<ol>
<li>Since it only gives minimal information about strength&mdash;12+ points in
the opener's hand and 6+ points in the responder's hand&mdash;there's no way of
figuring out whether you have enough strength to go to 3NT (with 25+ points and
no 8-card major fit).</li>
<li>It can miss an 8-card major fit. For example:
<ul><li>If you have five spades and four hearts, and you open 1&spades;, and
your partner has four hearts but less than three spades, how will the 8-card
heart fit be discovered? Your partner will be forced to respond 1NT and you
will have no way of knowing they also have four hearts.</li>
<li>Again, what if you have five spades and four hearts, but this time your
partner, holding only three spades and three or fewer hearts, opens with
1&clubs; or 1&diams;? You would first respond 1&hearts;, and your partner, not
being able to support hearts, would rebid 1NT. So the 8-card spade fit is
missed.</li>
<li>What if you have six of a major suit, you open 1M, and your partner has
only two of that suit? Is it possible to find the 8-card fit then?</li>
</ul></li>
<li>There's also no way to find a minor suit agreement, which might be
important if you want to go to game but neither 4M nor 3NT is viable, but also
means you don't get the chance to play a 2m contract, which, as discussed in
section 2, can be better than 1NT.</li>
</ol>
<p>All of these issues can be resolved to some extent, but we need to get more
creative with our bidding. As the title of this section suggests, the idea is
that if we want to communicate more information with partner, we need to
consider bidding at the two-level or higher rather than just giving up in
1NT. Right now, there is all that unused bidding space above 1NT just waiting
to be put to good use. Of course, we need to be careful not to take the bidding
to too high a level, where there is a high risk of not being able to make
whatever contract we end up in. At the same time, we should minimize the risk
of missing a game, which can happen when we pass, or allow our partner to pass,
when bidding ought to continue.</p>
<p>In the next few subsections, we will motivate some powerful new tools for
dealing with the above problems.</p>
<h3>Two-level suit response to one-level opening bid</h3>
<p>Suppose your partner opened 1&spades;. You realize you can't support spades
(since you have 2 spades or fewer) but you have five hearts so you think that
maybe you and your partner can play in a hearts contract. Should you bid
2&hearts;? Well, let's think about this carefully. What if your partner can't
support your hearts either? Then playing in either hearts or spades will be a
bad idea because you don't have an 8-card fit. Your partner would be forced to
respond with 2NT. It turns out that you and your partner have to have together
at least 23 total points in order to have better than even odds of making a
2NT contract. Your partner's opening bid communicates 12 points, so unless
you have at least 11 points, it doesn't make sense to respond at the two level
and risk ending up in a 2NT contract. With between 6 and 11 points, responding
1NT instead of bidding 2&hearts; is the more sensible course of action. You'll
probably actually make the 1NT contract and get points, instead of being in
2NT, going down, and losing points.</p>

<p>In the Standard American system, you need at least 11 points (sometimes 10)
and five of your suit in order to make a two-level response to a one-level
opening. However, a more popular system is that you need at least 13 points and
four of your suit to respond. Why is that? Think about it for a minute...</p>

<p>ANSWER: When your partner has opened, if you have at least 13 points, you
immediately know that you have enough strength for game. If your system
provides that you need 13 points to make a two-level response to a one-level
opening, then upon your response, you and your partner will both immediately
come to an understanding that you intend to play in game, and will not pass
until a game-level contract is reached. (This partially resolves problem number
1 stated at the beginning of this section.) Furthermore, there is still a lot
of bidding space left in order for you and your partner to negotiate the best
choice of game to play (3NT, 4&hearts;, or 4&spades;) based on your suit
distribution. In the Standard system, where the response only means 11 points, 
if you have a game-forcing hand (13+ points), you sometimes need to make a
jump bid at a later time to tell partner that you have more points than
originally promised, which uses up bidding space and makes it harder to find
the best game contract to play in.</p>

<p>Furthermore, if you and your partner have an agreement that you will make a
2/1 response in order to force to game, then you will not <em>always</em> have
a five-card suit to bid. For example, what if your partner opened 1&spades; and
you have this:
<?=ch('J3', 'Q762', 'KQ3', 'AJ63')?>
You can't support your partner's spades since you have only two spades. You
want to force to game by making a 2-level response, but you have no five-card
suit. In order to accommodate this situation, the system allows you to respond
with only four of a suit. However, you still need five <strong>hearts</strong>
to make the 2&hearts; response to a 1&spades; opening bid. This mirrors the
opening bid system, in which you would need 5 hearts to open 1&hearts;.
Therefore, with this hand, the appropriate response is 2&clubs;. If partner
has four hearts, they will subsequently bid 2&hearts; and at that point the
fit will be found and you can jump to 4&hearts;. Otherwise partner will bid
something other than 2&hearts; and you, knowing they don't have four hearts,
can then comfortably go to 3NT.</p>

<p>This system, with forcing two-over-one responses showing 13+ points and at
least four cards of the new suit, is called <strong>two-over-one (2/1) game
forcing</strong>.  According to this system, if one player opens one of a suit,
and their partner, who has not yet passed, responds with two of a
<em>lower</em> suit, then the response communicates 13+ points and at least
four of the suit, so that the partnership is now committed to game, and will
use subsequent bids to find the best game to play in. If your partner makes
such a 2/1 response to your opening bid, remember that you must not pass until
game is reached (with some rare exceptions). However, if your partner has
already passed, and then you open one of a suit, and then your partner responds
with two of a lower suit, your partner does <strong>not</strong> have 13+
points.  (If they did, then <em>they</em> would have opened when given the
opportunity, instead of passing.) In that case, most players agree that the
response has the Standard American meaning of 11+ points. (As we covered
previously, a response with less than 11 points here would not be wise.)
Therefore, the following auctions are 2/1 game forcing, with the responder
showing 13+ points:
<span class="auctionContainer">
<?=auction(array('1&diams;', 'P', '2&clubs;', 'P'))?>
<?=auction(array('P', '1&spades;', 'P', '2&hearts;'))?>
</span>
whereas the following is not, because the responder (West) already passed once,
and could not possibly have 13+ points, but instead must have 11&ndash;12:
<span class="auctionContainer">
<?=auction(array('P', 'P', '1&diams;', 'P',
                 '2&clubs;', '', '', ''))?>
</span>
The following auction is also not 2/1 game forcing, because the responder chose
to jump a level by bidding 2&spades; instead of 1&spades;:
<span class="auctionContainer">
<?=auction(array('P', '1&hearts;', 'P', '2&spades;'))?>
</span>
Some players have an
agreement that this <em>jump shift</em> shows an especially strong hand (17+
points). But we will not discuss this right now. Instead, avoid making jump
shifts. If your partner has opened 1&hearts; and you have at least 4 spades but
less than 3 hearts, you should feel free to respond 1&spades;, no matter how
strong your hand is. If you want to force to game, you can do that later.</p>

<p>After the game-forcing 2/1 response, subsequent bidding by the opener and
responder should focus on finding the best game to play in. As a general rule,
showing a new suit means you have at least four cards in that suit, while
rebidding a suit you already bid, without support from partner, means you have
at least six cards in that suit. Therefore:</p>
<ul>
<li>Remember that if a suit fit has not been found yet, and you have a 4-card
major suit that neither you nor your partner has mentioned yet, you should bid
that suit in the hopes that your partner will also have 4 of that major.</li>
<li>Once you become aware that a 8-card major fit exists, raise to the 4 level.
For example, with
<span class="auctionContainer">
<?=auction(array('1&spades;', 'P', '2&clubs;', 'P',
                 '2&spades;', 'P', '', ''))?>
</span>
if you are East, your partner's rebid tells you that they have at least six
spades; therefore, if you have at least <em>two</em> spades, then support your
partner by raising to 4&spades;. With the following auction:
<span class="auctionContainer">
<?=auction(array('1&spades;', 'P', '2&hearts;', 'P'))?>
</span>
if you are West, your partner's 2&hearts; response tells you that they have at
least <em>five</em> hearts; therefore, if you have at least three hearts, then
support your partner by raising to 4&hearts;. With the following auction:
<span class="auctionContainer">
<?=auction(array('1&spades;', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '', ''))?>
</span>
if you are East, and you have at least four hearts,  then support your partner
by raising to 4&hearts;.</li>
<li>When an 8-card major fit can't be found, normally you will end up playing
in 3NT, with some rare exceptions. Sometimes you will go to 5m, but you are
also allowed to stop in 4m.</li>
</ul>
<h3>Two-level bidding after the first response</h3>
<p>In the previous section, we covered the immediate two-level suit response to
a one-level opening bid. We discussed that a sane bidding system would only
allow such a response to be made if the responder has at least 11 points.
However, there are other situations that do not require as much strength.</p>
</section>
</div>
