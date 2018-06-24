<div style="margin: 1em">
<style scoped>
li {
    margin: 0.7em 0;
}
div.handWrapper {
    text-align: center;
}
div.handContent {
    display: inline-block;
    text-align: left;
    padding: 1ex 0.7em;
    margin: 1em;
    border: 1px solid #808080;
}
table.auction {
    display: inline-block;
    border-collapse: collapse;
    margin: 2ex 0.7em;
}
table.auction th {
    background-color: #c0c0c0;
}
table.auction td {
    background-color: #ffff80;
}
table.auction td, table.auction th {
    border: 1px solid grey;
    width: 1.5em;
    text-align: center;
}
</style>
<?php
// "rh" means "render hand"
function rh($spades, $hearts, $diamonds, $clubs) {
    return "<div class='handContent'>" .
           "<span style='color: black'>&spades;</span> $spades<br/>" .
           "<span style='color: red'>&hearts;</span> $hearts<br/>" .
           "<span style='color: red'>&diams;</span> $diamonds<br/>" .
           "<span style='color: black'>&clubs;</span> $clubs<br/>" .
           "</div>";
}
// "ch" means "center hand"
function ch($spades, $hearts, $diamonds, $clubs) {
    return '<div class="handWrapper">' .
           rh($spades, $hearts, $diamonds, $clubs) .
           '</div>';
}
function auction($a) {
    $result = "<table class='auction'>" .
              "<tr><th>W</th><th>N</th><th>E</th><th>S</th></tr>";
    for ($i = 0; $i < count($a); $i++) {
        if ($i % 4 == 0) {
            $result .= '<tr>';
        }
        $result .= "<td>{$a[$i]}</td>";
        if ($i % 4 == 3) {
            $result .= '</tr>';
        }
    }
    return $result . '</table>';
}
?>
<section id="eval">
<h2>Section 1: Hand evaluation</h2>
<p>The most basic technique for evaluating your hand is to give yourself:
<ul>
<li>4 points for each ace;</li>
<li>3 points for each king;</li>
<li>2 points for each queen;</li>
<li>1 points for each jack.</li>
</ul>
These are called <em>high card points,</em> or <q>HCP</q> for short. There are
40 HCP in a deck.</p>
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
<p>When you are playing in a suit contract, there is an advantage to have
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
<p>Usually distribution points are added according to the following rules:
<ul>
<li>Before a suit fit has been found, or if you are planning on being in
notrump, give yourself 1 point for each 5-card suit, 2 points for each
6-card suit, 3 points for a 7-card suit, and so on.</li>
<li>Once a suit fit has been found, take away the length points, and instead
give yourself 1 point for each doubleton suit, 2 points for each singleton
suit, and 3 points for each void suit. (This does not apply to the trump
suit.)</li>
</ul>
Don't add points for <em>both</em> length and shortness, because then you'll
probably overcount. There are some special situations where both length and
shortness matter, but for now let's keep it simple.</p>
<p>The sum of HCP and distribution points is called <q>total points</q> or
often just <q>points</q>.</p>
<p>You may be surprised to hear that making a 3NT contract (9 tricks) is often
possible when you and your partner have as little as 25 total points. With
25 HCP for example, your partnership would only have 62% of the HCP in the
deck, but it's probably possible to take 69% of the tricks. That's partially
because the declarer has the ability to coordinate play between their hand and
the dummy hand, thus making their HCP count for more by using them
strategcially.</p>
</section>
<section id="scoring">
<h2>Section 2: Overview of duplicate bridge scoring</h2>
<p>The scoring rules of bridge are complicated, but there a few basic rules
that we should go over. It is not possible to understand bidding unless you
understand scoring. After all, the ultimate goal of a bidding system is to
help you score as many points as possible. 
<ul>
<li>The suits are worth different amounts of points. Each club or diamond level
is worth 20 points. Each heart or spade level is worth 30 points. Notrump is
worth 30 points per level plus an extra 10 points. For example, 3&hearts; is
worth 90 points (3 times 30) whereas 2NT is worth 70 points (3 times 30 plus
10). Because of this, your partnership will usually want to play in hearts or
spades instead of clubs or diamonds. Hearts and spades are called the
<strong>major suits</strong> whereas clubs and diamonds are called the
<strong>minor suits</strong>.</li>
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
suit between the two of you) than you will in notrump. Therefore the bidding
system still has the objective of trying to find a 8 card <em>major</em> fit
even at partscore. For example, if you have enough points together so that you
could make a 1NT contract, but you also have an 8 card fit in spades, then you
will probably be able to make a 2&spades; contract, and choosing 2&spades;
instead of 1NT will score your side 110 points instead of 90, assuming you
make the contract. Even 2 of a minor (also 90 points) might be better than 1NT
because if your hands are imbalanced and have a weak suit then in 1NT the
opponents can more easily deprive you of overtricks. However, since the
advantage of playing a partscore contract in a suit is slight, it's more
important to make sure we don't bid a contract we can't make than to go too
high looking for a suit fit.</li>
</ul>
</p>
</section>
<section id="1open">
<h2>Section 3: Opening bidding at the one level</h2>
<p>An <em>opening bid</em> is the first call in a particular auction other than
<q>Pass</q>.</p>
<p>If your hand is really bad, you probably shouldn't make an opening bid
because the odds of actually being able to make a contract are not in your
favour. On the other hand, if your hand is good, you need to make an opening
bid. What would happen if your hand and your partner's hand were both good and
neither opened? Then you might very well miss a game level contract.</p>
<p>This tells us that the threshold for how many points you need to make an
opening bid should be no more than 13 (since about 25 points are needed to make
game). If you and your partner both had 13 points but neither opened, then
you'd be missing out.</p>
<p>You might wonder whether it's worthwhile to make the threshold lower. What
if you and your partner agreed to open with at least 11 points?
There are two disadvantages to that, though. One is that it gives less
information. For example, if you and your partner both have 13 points, but you
have agreed that only 11 points are required for an opening bid, then after
you've opened, your partner still doesn't know whether you have enough for
game. The other disadvantage is that the fewer points you have when you open,
the higher the risk of not having enough points between you and your partner to
actually make a contract. Indeed, you might not even have the majority of the
HCP in the deck.</p>
<p>That's why almost all partnerships use a system in which you only open with
13 points or more. This system works well even when your hand is weak and your
partner's hand is potentially strong. In that case you just pass and see
whether your partner opens. In that case, you still have a good chance of
making a partscore contract (or even a game contract, if your partner's hand is
especially good).</p>
<p>You can open with less than 13 HCP if you have good distribution. If
you have at least 13 <em>total</em> points, you should make an opening bid. In
fact, most players use a slightly more liberal rule, called the <strong>Rule of
20</strong>, which states that you can open if the sum of your HCP count and
the lengths of your two longest suits is at least 20. For example, with 12 HCP
and a 4432 distribution, you can open. If you forget the rule of 20, just
remember to open with 13 total points or more. (Remember to count points for
length rather than shortness, since you haven't found a fit yet.)</p>
<p>(Note: As a consequence of the rule of 20, an opening bid only promises 12
total points, not necessarily 13.)</p>
<p>Once you've decided your hand is good enough to open the bidding at the one
level, you should also try to communicate some information to your partner
about the suit distribution of your hand. This is where it gets
interesting. Recall from the previous section that one of the important things
to figure out about your hands is whether you have a 8-card fit in any major
suit (&hearts; or &spades;). The minor suits are less important; finding a
8-card major fit takes precedence. How can we design a system for you and your
partner to communicate through the bidding so that you can figure out whether
you have a 8-card major fit?</p>
<p>If you do have a 8-card major fit, then it's most likely that either you
have 4 and your partner has 4, or one of you had 5 and the other has 3. So one
sensible system would be: if you have opening strength and 4 of a major suit,
then open bidding with 1 of that suit. If you don't have 4 of either major
suit, then there must be a minor suit in which you have at least 4, so open 1
of that instead. If partner also has 4 of the major suit you bid, then they
can raise to 2 of that suit, to show <q>support</q>, and voilà, you have found
your 8-card major fit. If partner doesn't have 4, then they can bid something
else.</p>
<p>Another possible approach is that when you are opening, if you have at least
5 of a major suit, then bid 1 of that suit. Then your partner can support you
with 3 of that suit. At first glance, this system sounds bizarre: what if
you're the one with 3 hearts and your partner has 5? After your opening bid,
how will you and your partner figure out that you have 8 hearts in total?
However, this <q>five-card major</q> approach does have advantages too. The
Standard American system is a <q>five-card major</q> system, whereas the ACOL
system (popular in the UK) is a <q>four-card major</q> system. The remainder of
this document will assume we are using a five-card major system.</p>
<p>If you have opening strength but no five-card major, then choose the longer
of your two minor suits to open with.</p>
<p>Thus, the following hand should be opened 1&clubs;:
<?=ch('75', 'AK97', 'A62', 'Q973')?></p>
<p>while the following hand should be opened 1&hearts;, and if the opener's
partner has at least 3 hearts, then a 8-card major fit has been found:
<?=ch('AK', 'KJT98', 'AQJ3', 'T4')?></p>
<p>The following hand shouldn't be opened at all, since it's too weak:
<?=ch('863', 'AK753', '72', 'JT4')?></p>
<p>Notice that in some cases, an opening bid of 1m (the lowercase <q>m</q>
means a minor suit) might mean only 3 of that suit. For example, the following
hand would be opened 1&clubs;:
<?=ch('A42', 'QT92', 'QJ9', 'A72')?></p>
That's okay though; most of the time we don't care how many of a minor suit we
have. When your partner opens 1m, your first priority is still finding a 8-card
major fit, if possible. We'll see how to do that in the next section.</p>
</section>
<section id="1resp">
<h2>Section 4: Subsequent one-level bidding</h2>
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
<p>But that's not the only time when you should respond to your partner's bid.
Say your partner open, and you have 8 points. Do you pass, because you only
know that you and your partner have 20+ points together? That's probably not a
good idea, because what if your partner actually has 17+ points? Then you
would miss a game.</p>
<p>So it is desirable to have a system where you can respond even when you have
less than 13 points, in the hopes that your partner will have more points than
they initially promised. But does that mean you should have a system where you
will respond even with 0 points? No, because there are two problems with that:
<ul>
<li>When you have 0 points, for all you know, you and your partner together
might have only 12. It's too dangerous to support your opponent's suit by
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
A sensible compromise is to meet halfway: agree to <strong>respond to partner's
opening bid if you have at least 6 points,</strong> and if your
partner has 6&ndash;7 more points than originally promised (<i>i.e.,</i> 19 or
more) then they'll know you should go to game. This situation actually happens
pretty often.</p>
<p>So we'll use a system where you respond if you have at least 6 points. But
what should you respond with? For that, remember that our other goal is to
figure out whether we have a 8-card major fit. If your partner has opened 1M
(the uppercase <q>M</q> means a major suit) and you have 3 of that suit, you
know you have a 8-card major fit. If that isn't the case, or partner opened 1m,
the system you follow for your subsequent bidding should serve the goal of
determining whether a 8-card major fit exists.</p>
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
<?=ch('8764', '3', 'K862', 'K942')?></p>
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
<div style="text-align: center">
<?=auction(array('P', '1&diams;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', ''))?>
</div>
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
<p>So in summary, the basic system for subsequent bidding after a 1-level
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
There are exceptions to these rules, however. The 1NT <q>I give up</q> bid is
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
<h2>Section 5: Supporting a major suit</h2>
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
least 18 points together. You might be surprised that it's usually possible to
make the two-level contract (which means 8 tricks). That's because you set the
trump suit to be a suit that you and your partner have, which gives you an
advantage in trick-taking compared to the defenders (your opponents).</p>
<p>As discussed previously, when opener finds out that their partner has 6+
points, and a major suit fit is established, opener can raise to the 4 level
if they themselves have at least 19 points, since the partnership then has a
total of 25+. This auction is a fairly typical one:
<div style="text-align: center">
<?=auction(array('P', '1&spades;', 'P', '2&spades;',
                 'P', '4&spades;', 'P', 'P',
                 'P', '', '', ''))?>
</div>
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
<div style="text-align: center">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', '3&spades;'))?>
</div>
Here, you jump raise to 3&spades; once the 8-card spade fit is found.</p>
<p>The opener can also be the one to extend an invitation. If for example you
have the following hand and are sitting north:
<?=ch('AJ8', 'AJ54', 'KQ', 'J63')?>
then the auction might start like this:
<div style="text-align: center">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '3&hearts;', '', ''))?>
</div>
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
<div style="text-align: center">
<?=auction(array('P', '1&clubs;', 'P', '1&hearts;',
                 'P', '1&spades;', 'P', '4&spades;'))?>
</div>
</p>
</section>
<section id="2resp">
<h2>Section 6: Subsequent bidding at the two-level and higher</h2>
<p>In section 4, we described how to try to find a 8-card major fit by bidding
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
All of these issues can be resolved to some extent, but we need to get more
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
<div style="text-align: center">
<?=auction(array('1&diams;', 'P', '2&clubs;', 'P'))?>
<?=auction(array('P', '1&spades;', 'P', '2&hearts;'))?>
</div>
whereas the following is not, because the responder (West) already passed once,
and could not possibly have 13+ points, but instead must have 11&ndash;12:
<div style="text-align: center">
<?=auction(array('P', 'P', '1&diams;', 'P',
                 '2&clubs;', '', '', ''))?>
</div>
The following auction is also not 2/1 game forcing, because the responder chose
to jump a level by bidding 2&spades; instead of 1&spades;:
<div style="text-align: center">
<?=auction(array('P', '1&hearts;', 'P', '2&spades;'))?>
</div>
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
at least six cards in that suit. Therefore,
<ul>
<li>Remember that if a suit fit has not been found yet, and you have a 4-card
major suit that neither you nor your partner has mentioned yet, you should bid
that suit in the hopes that your partner will also have 4 of that major.</li>
<li>Once you become aware that a 8-card major fit exists, raise to the 4 level.
For example, with
<div style="text-align: center">
<?=auction(array('1&spades;', 'P', '2&clubs;', 'P',
                 '2&spades;', 'P', '', ''))?>
</div>
if you are East, your partner's rebid tells you that they have at least six
spades; therefore, if you have at least <em>two</em> spades, then support your
partner by raising to 4&spades;. With the following auction:
<div style="text-align: center">
<?=auction(array('1&spades;', 'P', '2&hearts;', 'P'))?>
</div>
if you are West, your partner's 2&hearts; response tells you that they have at
least <em>five</em> hearts; therefore, if you have at least three hearts, then
support your partner by raising to 4&hearts;. With the following auction:
<div style="text-align: center">
<?=auction(array('1&spades;', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '', ''))?>
</div>
if you are East, and you have at least four hearts,  then support your partner
by raising to 4&hearts;.</li>
<li>When an 8-card major fit can't be found, normally you will end up playing
in 3NT, with some rare exceptions. Sometimes you will go to 5m, but you are
also allowed to stop in 4m.</li>
</ul></p>
<h3>Two-level bidding after the first response</h3>
<p>In the previous section, we covered the immediate two-level suit response to
a one-level opening bid. We discussed that a sane bidding system would only
allow such a response to be made if the responder has at least 11 points.
However, there are other situations that do not require as much strength.</p>
</section>
</div>
