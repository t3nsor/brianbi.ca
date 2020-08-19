<h2>Subsequent bidding at the two level and higher</h2>
In the section on <a href="bridge/1resp">one-level responses</a>, we discussed
how to try to find a 8-card major fit by bidding at the one level. If this
procedure fails, then you end up in 1NT. There are a few problems with this:
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
<a href="bridge/scoring">the scoring section</a>, can be better than 1NT.</li>
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
<p>In the previous subsection, we covered the immediate two-level suit response
to a one-level opening bid. We discussed that a sane bidding system would only
allow such a response to be made if the responder has at least 11 points.
However, there are other situations that do not require as much strength.</p>
