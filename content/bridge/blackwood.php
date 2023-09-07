<h2>The Blackwood convention</h2>
<h3>Introduction</h3>
<p>
The <em>Blackwood convention</em> is the most famous convention for bidding suit
slams, and for many partnerships, it is the <em>only</em> slam bidding
convention in use. It is also the most frequently misused convention. Blackwood
is like fire: knowledge of Blackwood cannot be done without, but misuse of
Blackwood is likely to result in disaster.
</p>
<p>
Blackwood is the artificial bid of 4NT, promising enough strength for slam. Not
all 4NT bids are Blackwood, as we will discuss below. It is essential for a
partnership to have a clear agreement about when 4NT is Blackwood and when it
has some other meaning (typically a natural one). If your partner bids 4NT as
Blackwood and you think it's natural, or if your partner bids 4NT as natural and
you think it's Blackwood, you will not get a good score.
</p>
<p>
Because Blackwood is so well-known, it should not be alerted even though it is
an artificial bid.
</p>
<p>
Blackwood can be used either with <a href="/bridge/control">control bids</a> or
alone. That is, one or both partners might have made control bids already,
after which either partner can bid 4NT, Blackwood, which ends control bidding.
However, even if neither partner has made a control bid yet, Blackwood can still
be used. The interaction between Blackwood and control bids will be explained
in more detail below.
</p>
<h3>Responses to Blackwood</h3>
<p>
Blackwood has many variations. It is essential to ensure that you and your
partner agree to play the same variation of Blackwood. The most popular
variation will be described here. Note that the responses to Blackwood are
artificial. The 2022 version of the ACBL Alert Procedures appears to require
responses to Blackwood to be alerted; however, this would deviate from previous
procedures, and is probably an error. Therefore, do not alert responses to
Blackwood.
</p>
<p>
When a player bids 4NT as Blackwood, their partner should count the number of
<em>keycards</em> they possess. A keycard is either an ace of any suit, or the
king of the agreed-upon trump suit. Therefore, a player can have anywhere from
zero to five keycards. This convention, of treating the king of trumps as the
<q>fifth ace</q>, is known as <em>Roman keycard Blackwood</em>, or RKCB for
short. The 4NT bid asks partner how many keycards they have.
</p>
<p>
The player who has been asked for keycards (that is, the partner of the 4NT
bidder) should respond as follows:
</p>
<ul>
<li>
Holding 1 or 4 keycards: Bid 5C.
</li>
<li>
Holding 0 or 3 keycards: Bid 5D.
</li>
<li>
Holding 2 or 5 keycards, but lacking the queen of trumps: Bid 5H.
</li>
<li>
Holding 2 or 5 keycards, and also the queen of trumps: Bid 5S.
</li>
</ul>
<p>
Notice that a keycard is a first-round control in a side suit, or a first or
second round control in the trump suit. The responses to 4NT do not communicate
any information about second-round control in side suits. Also, the responses to
4NT do not communicate any information about strength.
</p>
<p>
Here is an example of an auction that uses Blackwood:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '4S', 'P', '4N', 'P',
                 '5D', 'P', '6S', 'P',
                 'P', 'P', '', ''))?>
</span>
West's hand is: <?=rsh('KJ87', 'AQ954', 'KQ7', 'A')?><br/>
East's hand is: <?=rsh('AQ54', 'K6', '5', 'K98732')?>
</p>
<p>
In the auction above, East's 4NT bid is Blackwood. East has a good hand, and
when East sees West's jump to 4S, East realizes that West has 19+ points and
support for spades. This is excellent news; the two hands together have over 33
total points, which is enough for a small slam. When East bids 4NT, East is
asking West for keycards; because spades was already agreed as the trump suit,
a keycard is an ace of any suit, or the king of spades. West has three
keycards: the ace of hearts, ace of clubs, and king of spades. So West responds
5D, which shows either zero or three keycards.  Because West has 19+ points,
East knows that it is unlikely that West has zero keycards.  East can infer
that West has three keycards. East has only one keycard, so there is a keycard
missing: East knows that West is missing either the king of clubs or a side
suit ace, but East doesn't know which keycard is missing.  Nevertheless, East
knows that the missing keycard will only cost the partnership one trick: for
example, if the missing keycard is the ace of diamonds, then the opponents will
be able to win one trick with the ace of diamonds, but East's singleton gives
second-round control in diamonds. East is now confident that a small slam in
spades is viable, and signs off in 6S.
</p>
<h3>What Blackwood promises</h3>
<p>
Blackwood should <strong>only</strong> be used by a player who is confident
about two things:
</p>
<ol>
<li>
The partnership has enough strength for a slam in the agreed suit: that is, in a
contract in the agreed suit, at least 12 tricks can be taken.
</li>
<li>
The partnership has at least second-round control in all side suits.
</li>
</ol>
<p>
Thus, unlike a control bid, Blackwood is not an <em>invitation</em> to slam. If
your partner has made a 4NT Blackwood bid, your responses, which are described
in the previous subsection, don't communicate anything about strength. Your
partner is not interested in your strength; your partner already knows that the
partnership has enough strength for a slam. It follows that a player should not
bid 4NT, Blackwood, unless that player is sure that there is enough strength in
the combined hands. If a player is unsure, they may start with a control bid,
which is an invitation to slam, and provides a means for the player's partner to
decline. If the invitation is accepted, Blackwood might be used as a follow-up
bid. A player who has been invited to slam can also use Blackwood to accept the
invitation.
</p>
<p>
Furthermore, the player who bids 4NT, Blackwood, will find out (based on their
partner's response) whether there are any missing first-round controls or a
missing king of trumps, but they will not find out whether there are any missing
second-round controls in side suits. This can be a problem. Suppose West holds
<?=rsh('KJ87', 'AQJ97', 'T43', 'A')?> and East holds
<?=rsh('AQ54', 'K8', '98', 'KQJ92')?>. The following auction illustrates a way
to misuse Blackwood:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '3S', 'P', '4N', 'P',
                 '5D', 'P', '6S', 'P',
                 'P', 'P', '', ''))?>
</span>
East has one keycard, and West has three. This pair of hands is thus somewhat
similar to the pair of hands from the previous subsection: only one keycard is
missing between the two hands. (In this pair of hands, however, West has been
made slightly weaker, and East slightly stronger.) When West bids 3S, which is
an invite to game with 16&ndash;18 points, East, who has 17 total points, gets
overly excited and slams down the 4NT card. When West's response informs East
that the partnership holds 4 of the 5 keycards, East bids the small slam.
Unfortunately, South leads the king of diamonds, winning trick one, then the ace
of diamonds, winning trick two. The contract has been defeated.
</p>
<p>
East made a mistake. East does not have first or second round control in
diamonds, which means that in order for the spade slam to be viable, West must
have first or second round control in diamonds. But East did not ask West about
side suit controls; East jumped directly to Blackwood, and Blackwood does not
give information about second-round controls in side suits. The correct auction
is shown below:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '3S', 'P', '4C', 'P',
                 '4H', 'P', '4S', 'P',
                 'P', 'P', '', ''))?>
</span>
As soon as spades is agreed, East bids 4C to show a control in clubs. When West
skips over 4D to bid 4H, East realizes that West does not have even second-round
control in diamonds. That means a slam is not viable, so East signs off in
spades at the lowest available level, that is, 4S.
</p>
<p>
Now suppose West holds <?=rsh('KJ87', 'A7653', 'K43', 'A')?> and East holds the
same hand as in the previous example, <?=rsh('AQ54', 'K8', '98', 'KQJ92')?>. In
this case, West does have second-round control in diamonds. A possible auction
is:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '3S', 'P', '4C', 'P',
                 '4D', 'P', '4N', 'P',
                 '5D', 'P', '6S', 'P',
                 'P', 'P', '', ''))?>
</span>
East did the responsible thing and started control bidding. When West responds
4D, East now knows that the partnership has at least second-round control in all
side suits. East also knows that the partnership has enough strength for a small
slam. The only thing that might make East stop short of a slam is finding out
that the partnership is missing two keycards (that is, missing two aces, or
missing one ace and the king of spades). So <em>now</em>, after having gotten
the information needed from control bidding, East uses Blackwood to ask for
keycards. When East finds out that the partnership holds 4 of 5 keycards, East
can confidently sign off in 6S. This example illustrates how control bidding and
Blackwood can work together to help a partnership bid slam confidently. Note
that if West's response to Blackwood had been 5H, meaning only <em>two</em>
keycards, then East, realizing that the partnership holds only 3 of the 5
keycards, would have signed off in 5S, stopping short of slam.
</p>
<h3>Which 4NT bids are Blackwood?</h3>
<p>
Novices often assume that every 4NT bid is Blackwood. A serious partnership must
have a thorough agreement as to which 4NT bids are Blackwood (and, if a 4NT bid
is not Blackwood, what it means). This is actually a surprisingly subtle issue,
but there are a few principles that are generally understood:
</p>
<ul>
<li>
If suit agreement has <em>already</em> been established, then a 4NT bid by
either partner is usually Blackwood. For example, in the following example from
earlier in this section, 4NT is Blackwood:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '4S', 'P', '4N', 'P',
                 '5D', 'P', '6S', 'P',
                 'P', 'P', '', ''))?>
</span>
West's bid of 4S establishes spades as the agreed suit, so the subsequent 4NT
bid is Blackwood.
</li>
<li>
The only exception to the above rule is that if the opponents have interfered,
<strong>and</strong> the auction is inconsistent with slam interest, then 4NT is
a natural bid. For example:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2D', 'P',
                 '2H', 'P', '3N', 'P',
                 '4H', 'P', 'P', 'X',
                 'P', '4S', '4N', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above auction, East's 2D bid is a Jacoby transfer, showing 5 hearts. West
accepts the transfer, as they are obligated to do, by bidding 2H. East then bids
3N to show a hand with game-forcing strength that is not strong enough to invite
to slam; <a href="/bridge/1nt4">as discussed previously</a>, if East had a hand
strong enough to invite to slam, then East would have bid 4NT instead of 3NT.
West corrects from 3NT to 4H because West has 3+ hearts, providing support for
East's hearts and setting hearts as the agreed trump suit. When the opponents
interfere and North ends up bidding 4S, East has a decision to make: double to
penalize the opponents in 4S, or try to win the auction by bidding 5H? In this
case, East chooses a third option, namely playing in 4N. (East would only take
this action with a stop in spades and a relatively balanced hand that looks
suitable for notrump, <i>i.e.</i>, plenty of queens and jacks.) Because East did
not previously invite to slam when given the opportunity, East cannot have slam
interest now. East is just trying to get the best possible score because East
believes that a 4NT contract is makeable.
</li>
<li>
After a natural notrump opening, 4NT is always <a href="/bridge/1nt4"><!--
-->quantitative</a> (not Blackwood) unless suit agreement was <em>already</em>
established prior to the 4NT bid. For example, in the following type of auction
that was discussed in the section on quantitative notrump bids, 4NT is
quantitative:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2C', 'P',
                 '2H', 'P', '4N', ''))?>
</span>
No trump suit has been agreed yet; even if East does have 4 hearts, West does
not know whether East has 4 hearts as it might be the case that East's 4-card
major is spades. The 4NT bid here cannot be used to establish suit agreement.
The fact that suit agreement was not already established mean that 4NT is
quantitative, not Blackwood. East <em>does not have 4 hearts</em>, and has a
hand that is strong enough to invite to a notrump slam. Similarly, a 4NT bid
made directly after a Jacoby transfer is not Blackwood:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2H', 'P',
                 '2S', 'P', '4N', ''))?>
</span>
In the above auction, spades has not been agreed. East's 2H bid shows 5+ spades,
but West's 2S bid was forced and does not imply a fit in spades. So when East
then bids 4NT, East is merely showing a hand that is strong enough to invite to
slam; it is not Blackwood. But some conventions enable suit agreement to be
established. For example, the <em>Texas transfer</em> can be used by responder
to show a 6+ card suit:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '4H', 'P',
                 '4S', 'P', '4N', ''))?>
</span>
In the above auction, 4H is the Texas transfer, an artificial bid that shows 6+
spades and game-forcing strength. Because East has 6+ spades and West has 2+, a
8-card fit is known to exist; thus, the 4H bid in and of itself is sufficient to
establish spades as the agreed suit. At East's next turn to bid, 4NT is
Blackwood due to the fact that the trump suit was already previously agreed.
</li>
<li>
This rule is probably fairly obvious, but if neither you nor your opponent has
actually made any bid that shows a suit, then 4NT cannot be Blackwood. For
example:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '4N', ''))?>
</span>
The above 4NT bid is quantitative, not Blackwood.
<span class="auctionContainer">
<?=auction(array('2C', 'P', '2D', 'P',
                 '4N', '', '', ''))?>
</span>
2C is an artificial opening bid that shows a very strong hand; it doesn't show
clubs. 2D is an artificial relay response to 2C that does not show diamonds; it
simply asks the opener to further describe their hand. Since neither side has
shown a suit, 4NT cannot be Blackwood. In the absence of any other partnership
agreement, this 4NT bid should be interpreted as natural, showing an
extraordinarily strong and balanced hand. Finally, consider the following
auction:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '4H', '4N',
                 'P', '?', '', ''))?>
</span>
North hasn't bid at all, and South's 4NT bid is the first bid by South, so this
4NT bid cannot be Blackwood. It is a version of the <em>unusual notrump</em>
convention, showing at least 5 cards in each minor and a willingness to compete
for the contract. In most cases, North will bid their longest minor suit.
</li>
<li>
<p>
The trickiest situation is when one player has bid a suit, and the other player
has support for that suit but has <em>not yet</em> shown agreement. In many of
these cases, bidding 4NT is interpreted as Blackwood and implicitly shows
agreement for the suit that partner has bid. Here's an example:
<span class="auctionContainer">
<?=auction(array('1D', 'P', '1H', 'P',
                 '2S', 'P', '4N', ''))?>
</span>
West has 4 spades, and also has diamonds. East's response of 1H is a
bog-standard <a href="/bridge/1resp">one-over-one response</a>, showing 4+
hearts, and at least 6 points (with no upper bound). Normally, West would then
rebid 1S to show 4 spades. However, in this particular case West's hand is
strong enough to force to game (<i>i.e.</i>, 19+ points) so West skips over 1S
and bids 2S. This is called a <em>jump shift by opener</em> and is always
game-forcing (unless opponents have interfered, in which case the jump shift is
usually agreed to have some other meaning). East has support for West's spades
and 13+ points and is therefore ready to use Blackwood. In this particular
auction, 4NT <em>is</em> Blackwood and implicitly sets spades as the agreed
suit. So West should respond based on the number of aces plus the king of
spades.
</p>
<p>
For the sake of keeping the partnership agreement simple and easy to remember,
newer players might wish to use the following agreement: any time your partner's
last bid showed a suit, but you haven't shown agreement in that suit yet, you
can use 4NT to implicitly agree that suit and it is Blackwood; unless one of the
exceptions above applies. For example, in the auction above, West's last bid
showed spades, so 4NT agrees spades and asks for keycards. However, the
following 4NT is not Blackwood:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2D', 'P',
                 '2H', 'P', '2N', 'P',
                 '4N', '', '', ''))?>
</span>
The auction starts with a <a href="/bridge/2over1">2/1 sequence</a>; East's 2D
response shows diamonds and game-forcing strength. West's rebid of 2H shows 4+
hearts. East doesn't have a fit with either spades or hearts, so East rebids
2NT. No suit has been agreed. When West bids 4NT, this is not an implicit
agreement in diamonds, because East's last bid was not a diamond-showing bid; it
was a natural notrump bid, not showing any suit. Instead, West's 4NT bid is a
quantitative invitation to slam; West probably has about 17&ndash;18 points and
wants East to go to 6NT if East doesn't have a minimum.
</p>
<p>
Similarly, if the bidding started with a notrump opening, then as previously
discussed, 4NT cannot be used to implicitly agree with partner's suit; it is a
quantitative invitation to slam (not Blackwood), unless suit agreement was
previously established. And if opponents have interfered and the auction has
already denied slam interest, 4NT is natural, not Blackwood.
</p>
</li>
</ul>
<h3>Rebids following a response to Blackwood</h3>
<p>
Suppose you've bid 4NT, Blackwood, and your partner has dutifully responded with
5C, 5D, 5H, or 5S, showing the number of keycards they hold. What should you do
with this information?
</p>
<p>
Count the total number of keycards held by you and your partner. If you are
missing 2 or more of the keycards, a slam is not viable and you should sign off
in 5 of the agreed suit. For example, suppose West holds
<?=rsh('KJ87', 'AQJ54', 'KQJ', '2')?> and East holds
<?=rsh('AQ54', 'K6', '5', 'K98743')?>; the auction might go as follows:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '4S', 'P', '4N', 'P',
                 '5H', 'P', '5S', 'P',
                 'P', 'P', '', ''))?>
</span>
East's 4NT bid assks for keycards, with spades as the previously established
agreed suit. West has only two keycards: the king of spades, and the ace of
hearts. West's response of 5H shows 2 keycards and no queen of trumps (of
course, West can't have the spade queen because East has it). East has only one
keycard, the ace of spades. So East deduces that the partnership has only 3 of
the 5 keycards; a slam is not viable because the opponents can win the ace of
diamonds and ace of clubs. So East signs off in 5S.
</p>
<p>
If you are missing only 1 keycard, then a small slam might be viable. If you
know where the queen of trumps is, this can help you make a decision: when
missing 1 keycard <em>and</em> missing the queen, your side will often lose 2
tricks: one for the missing keycard, and one because the opponents may take a
trick using the queen of trumps. You still have a chance of making the slam, but
you should think carefully about whether the risk is worth it; when in doubt,
sign off in 5 of the agreed suit. On the other hand, if you have the queen of
trumps or if your partner has bid 5S (showing the queen of trumps), then with
only one missing keycard, you should bid a slam.
</p>
<p>
When your side holds all five keycards, a grand slam might be possible. However,
knowing when your side has enough cards to take 13 tricks requires judgement
that newer players often don't have, so it's usually safer to just sign off in a
small slam.
</p>
<p>
In a later section, we'll discuss more advanced aspects of the Blackwood
convention that can be used to ask partner whether they hold the queen or to ask
partner about their second-round controls. These agreements can help the
partnership determine whether or not to go to a grand slam.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
The Blackwood convention uses an artificial bid of 4NT to ask partner the number
of keycards they hold. A keycard is an ace of any suit, or the king of the trump
suit that was agreed upon. This 4NT bid should not be alerted.
</li>
<li>
The player who bids Blackwood must first ensure that the partnership has enough
strength for a suit slam and that the partnership has at least second-round
control in each side suit.
</li>
<li>
The partner of the player who bid Blackwood should bid 5C if they hold 1 or 4
keycards and 5D if they hold 0 or 3 keycards. If they hold 2 or 5 keycards, then
they should bid either 5H or 5S. 5S shows the queen of trumps; 5H denies it.
These responses should not be alerted.
</li>
<li>
4NT is sometimes not Blackwood:
<ul>
<li>
If no suit has been shown by either partner, then 4NT is not Blackwood.
</li>
<li>
If the auction started with a notrump opening, and no suit has yet been agreed
upon, then 4NT is a quantitative invitation to slam, not Blackwood.
</li>
<li>
If the opponents have interfered and the previous bids indicate that neither
partner could actually have slam interest, then 4NT is not Blackwood, even if a
trump suit was already agreed.
</li>
<li>
If a trump suit has already been agreed, then 4NT is Blackwood, unless the above
exception applies. If a trump suit has not been agreed yet, then 4NT implicitly
agrees to the suit that partner showed on their last bid (assuming there is such
a suit) and is Blackwood, unless one of the above exceptions applies.
</li>
</ul>
</li>
<li>
Blackwood may follow one or more <a href="/bridge/control">control bids</a>, or
the partnership might skip control bidding and go directly to Blackwood.
</li>
<li>
When the partnership is missing two keycards, the player who bid 4NT should
sign off in 5 of the agreed suit and not bid a slam. When the partnership is
missing one keycard, slam may be viable, especially if the partnership is known
to hold the queen of trumps. When the partnership has all five keycards, the 4NT
bidder should definitely bid at least a small slam.
</li>
</ul>
