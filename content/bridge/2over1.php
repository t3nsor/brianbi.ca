<h2>Two-over-one game forcing bids</h2>
In the section on <a href="/bridge/1resp">one-level responses</a>, we discussed
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
<a href="/bridge/scoring">the scoring section</a>, can be better than 1NT.</li>
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
<h3>The <q>semi-forcing 1NT</q> bid</h3>
<p>
When opener bids 1 of a suit, responder will occasionally have to make an
awkward 1NT response. Suppose your partner has opened 1&hearts;, and you have
the following hand:
<?=ch('AQ6', 'KT', 'J976', 'JT63')?>
What should you do? Well...
</p>
<ul>
<li>
As discussed in <a href="/bridge/1resp">Subsequent bidding at
the one level</a>, if you have less than 6 points, you should pass. But that
isn't the case here.
</li>
<li>
As discussed earlier in this section, if you have game-forcing strength, you can
make a 2/1 bid, such as 2&diams; or 2&clubs;. But unfortunately, you do not have
game-forcing strength in this hand.
</li>
<li>
As discussed in
<a href="/bridge/support-major">Supporting a major suit</a>, if
you have support for your partner's major suit, you should bid that suit to show
support. In this case you have 11 HCP, so if you had support, you would bid
3&hearts;. But you don't have suppport, so what do you do?
</li>
<li>
As discussed in <q>Subsequent bidding at the one level</q>, if you had 4 spades,
you should bid 1&spades; to show that suit, in case you and your partner have a
4&ndash;4 spade fit. That bid shows at least 6 points but with no upper bound.
Unfortunately, you can't make that bid because you don't have 4 spades. That
section also mentions that if you have a <em>minimal</em> hand and no more suits
to show, you should bid 1NT. In this case, <q>minimal</q> means close to the
minimum needed for you to respond at all, <i>i.e.</i>, 6&ndash;10 points. But
you have 11 points, so what do you do?
</li>
</ul>
<p>
It might seem that the obvious answer is to bid 2NT instead of 1NT, given that
you have invitational strength. However, most partnerships reserve 2NT as a
special support-showing bid when their partner has opened 1M. If you use that
convention, then you cannot bid 2NT here because you do not have a fit. So,
because you play a 2/1 system where you are not strong enough to bid 2 of a
suit here, you must bid 1NT even though your hand is above the normal point
range for a 1NT response. And because your partner knows that you're playing a
2/1 system, they must be aware of the fact that your 1NT response might show up
to 12 points (but always at least 6). For this reason, your partner normally
should not pass when you have made a 1NT response to their 1M opening, unless
your partner has a balanced, dead minimum (12&ndash;13 points). For this reason,
we say that this 1NT response is <em>semi-forcing</em>.
</p>
<p>
There are two reasons why semi-forcing 1NT is not a very useful bid. It is not
descriptive, as responder might not necessarily have a balanced hand. Responder
might have wanted to bid a suit, but could not do so because the partnership is
playing 2/1 game forcing. In addition, responder might actually want to play in
1NT: in other words, responder, having a balanced minimum, would really like for
opener to pass after responder bids 1NT, but because the 1NT response is
semi-forcing, opener will bid again most of the time, which forecloses the
possibility of playing in 1NT. Unfortunately, the semi-forcing 1NT that no one
likes is a necessary evil of 2/1 game forcing systems.
</p>
<p>
Note that when the opening bid is 1m instead of 1M, then responder's 1NT bid is
<em>not</em> semi-forcing. It is a natural bid, showing 6&ndash;10 points and a
balanced hand. The difference is that, when opener bids a major suit, responder
might have no choice but to bid 1NT because other options are not available. But
when opener bids a minor suit, responder has more options available, such as
bidding a 4-card major suit at the 1 level. If responder has invitational
strength with a balanced hand, they could bid 2NT. So if they choose to bid 1NT,
they really mean it. This is not a semi-forcing bid, and opener can pass, but is
allowed to bid more, if they have a reason to. For example, if opener has 19
HCP, they might raise to 3NT.
</p>
<h3>Two-level bids that are <em>not</em> 2/1 game forcing</h3>
<p>In the previous subsection, we covered the immediate two-level suit response
to a one-level opening bid. We discussed that a sane bidding system would only
allow such a response to be made if the responder has at least 11 points.
However, there are other situations that do not require as much strength.</p>
<p>
In the 2/1 game forcing situations discussed above, the 1-level bid is the
first bid made by you or your partner, and the 2-level bid is the first response
made by the opener's partner. In other words, the 2-level bid is the second bid
made in the auction. If a 2-level bid is not the second bid made in the auction,
then it is not a 2/1 game forcing bid. For example, consider the following
auction:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&clubs;', 'P', 'P', 'P'))?>
</span>
Because the 2&clubs; bid was the third bid&mdash;not the second&mdash;in this
auction, it is not game forcing. If West wanted to force to game, they would
need to have at least 19 points. Because this 2&clubs; bid is not game forcing,
West does not need to have 19 points to make this bid, and East can pass without
breaking the partnership agreement. Similarly, in the auction below:
<span class="auctionContainer">
<?=auction(array('1&diams;', 'P', '1&hearts;', 'P',
                 '1&spades;', 'P', '2&diams;', 'P',
                 'P', 'P', '', ''))?>
</span>
East's 2&diams; bid is the fourth bid in the auction, so it is not a 2/1 game
forcing bid. East does not need to have 13 points to make this 2&diams; bid, and
West does not need to keep bidding.
</p>
<p>
So, what do these non-game-forcing bids at the 2 level mean? We will discuss
their meaning in the next section.
</p>
<h3>You can make a 2/1 game forcing bid even if you have a fit</h3>
<p>
Because a 2/1 response promises enough for game, it is a valuable tool for
bidding <em>slams</em> (contracts at the 6 or 7 level). Suppose you are dealt
the hand below:
<?=ch('AJ3', '53', 'AQT86', 'KQ7')?>
If your partner opens 1&spades;, you will be happy because you know that you
have a fit in spades and that the partnership has enough strength to go to game.
One possibility is to bid 4&spades; directly. However, if you bid 4&spades;
directly, then your partner, who might now be interested in a 6&spades; slam, is
in a difficult position. Your partner knows you have at least 13 points and 3
spades. Your partner would <em>like</em> to know whether you have even more. In
this hand, you have 16 HCP and 17 total points, which means that if your
partner has a hand of similar strength, it will probably be possible to make a
slam. However, from your partner's point of view, you might have a minimum (13
points) and it would be dangerous for your partner to bid any higher, as it may
result in a contract that the partnership cannot make! So by making an immediate
jump to 4&spades;, you foreclose the possibility of exploring for a slam.
</p>
<p>
Instead, start by bidding 2&diams;. This will not tell your partner that you
have support for their spades, but it will tell your partner that you have at
least 13+ points and that neither of you will pass until a game is reached. If
your partner then bids 2&hearts; or 2&spades;, at that point you can show your
support by bidding 3&spades;. Then, your partner will know that you have 13+
points <em>and</em> support for their spades, but because the bidding has not
reached 4&spades; yet, they can make other bids to explore slam. For example,
your partner, seeing your 3&spades; bid, might proceed to bid 4&clubs;, which is
an artificial bid that we'll discuss in a later section, one of whose purposes
is to ask you whether you're interested in slam. If you have a minimum hand, and
do not find slam to be likely, you can bid 4&spades; to end the auction. Notice
that if you had bid 4&spades; in response to your partner's 1&spades; opening,
your partner would not be able to bid 4&clubs; to check whether you are
interested in slam.
</p>
<p>
Now imagine that your partner has opened 1&hearts;, and you have the following
hand:
<?=ch('AT984', 'KJ6', 'K7', 'A3')?>
What should you do? You have support for partner's hearts, and you have over 13
points. Should you bid 2&spades;? No; 2&spades; is not a 2/1 response, because
it is a jump bid. 2&clubs; or 2&diams; would be 2/1 responses. However, 2&clubs;
and 2&diams; would not make sense as responses here because you only have 2
cards in each minor suit. You should bid 1&spades;. As we discussed in
<a href="/bridge/1resp">Subsequent bidding at the one
level</a>, your 1-level suit response to your partner's 1-level suit bid is
forcing. You can make it even if you have a very strong hand, and your partner
will give you another chance to bid. So, you should start with 1&spades;; it is
not as descriptive a bid as a 2/1 response, because not only are you not telling
partner about your fit, but you're also not telling partner you have
game-forcing strength! But making this 1&spades; bid, rather than an immediate
jump to 4&hearts;, is just a price that you have to pay in order to keep the
possibility of slam open. Later in the auction, you will have opportunities to
tell your partner about your support and strength. We will discuss how to do
that in a later section.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
When a player opens 1 of a suit, and their partner responds 2 of a lower suit,
that response shows at least 13+ points and commits the partnership to not pass
until game is reached. This is called 2/1 game forcing. Not all partnerships
play the 2/1 game forcing convention, but it is overwhelmingly popular among
newer players in the United States. Note that if the 2-level bid is not the
second bid in the auction, then it is not a 2/1 game forcing bid.
</li>
<li>
A 2/1 response of 2&hearts; always shows at least <em>five</em> hearts in
addition to the 13+ point strength required for all 2/1 bids. A 2/1 response of
2&clubs; or 2&diams; typically shows at least <em>four</em> of the suit. (There
are rare cases where you can make a 2/1 response in clubs or diamonds despite
only having 3 of the suit. We won't discuss those here.)
</li>
<li>
When your partner opens 1 of a suit, you can make a 2/1 response even if you
have support for your partner's suit. By doing so, you immediately tell your
partner that the partnership must go <em>at least</em> to game, and possibly
further, but your partner won't yet know that you have support for their suit,
since you didn't bid their suit. You must show support on a later bid.
</li>
<li>
When your partner opens 1 of a suit and you want to force to game but you don't
have an appropriate suit with which to make a 2/1 response, you can bid a 4-card
suit at the 1 level, just as discussed in
<a href="/bridge/1resp">a previous section</a>. You will have
to let your partner know about your game-forcing strength and support on a later
bid.
</li>
<li>
When your partner opens 1&hearts; or 1&spades;, you can occasionally be in an
awkward situation where you have invitational strength and no support. There is
no good bid to show this, so you have to make the <em>semi-forcing 1NT</em> bid
instead, which shows anywhere from 6 to 12 points. Your partner must then bid
again because your hand is not necessarily weak; the exception is that if your
partner has only 12&ndash;13 points with a balanced hand, then they know that
even with you having 12 points, there is probably no game. So, only in that
particular case, your partner is allowed to pass. That's why this 1NT bid is
only <q>semi-forcing</q>, not completely forcing.
</li>
</ul>
