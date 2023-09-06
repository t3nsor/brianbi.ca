<h2>Blackwood</h2>
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
