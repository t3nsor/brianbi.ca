<h2>Control bidding</h2>
<p>
A <em>first-round control</em> in a suit is either the ace of the suit, or a
void in that suit. For example, a player who has the ace of clubs or who has no
clubs at all is said to have first-round control in clubs. The reason for this
terminology is that if the trump suit is any suit other than clubs, and the
opponents lead clubs, then the holder of the first-round control will win the
trick by playing the ace of clubs or by playing a trump. That player then has
control at the end of the first round.
</p>
<p>
A player who has either the king of a suit or a singleton in that suit is said
to have <em>second-round control</em> in that suit. Note that if a player has a
void, or both the ace and king together, or a singleton ace, then that player
has both first and second round control because the player will win the trick
both the first and second time that the suit is led.
</p>
<p>
First and second round controls are very important in a slam contract. For
example, if the contract is 7H, but neither declarer nor dummy has first-round
control in diamonds, then the opponents might win the first trick using the ace
of diamonds, which immediately sets the contract. Therefore, we see that in
order to make a grand slam, the declaring side must have the ace of trumps and
first-round control in all other suits. Similarly, in order to make a small
slam in a suit contract, the declaring side must have at least second-round
control in all side suits; for example, if the contract is 6S, but neither
declarer nor dummy has second-round control in clubs, then the opponents may win
the first and second tricks using the ace and king of clubs, which immediately
sets the contract. If the declaring side has only second (but not first) round
control in a suit, then they must have first-round control in all other suits.
</p>
<h3>Control bids</h3>
<p>
Because possession of first and second round controls is crucial in determining
the prospects of a suit slam, all serious players have a partnership agreement
that can be used by each player to tell their partner about any controls that
they hold. A bid that shows a control in the bid suit is called a <em>control
bid</em>. For example, consider the following auction:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3S', 'P',
                 '4D', 'P', '4H', 'P',
                 'P', 'P', '', ''))?>
</span>
East's response of 2H is a <a href="/bridge/2over1">2/1 game forcing bid</a>
that shows 5+ hearts and game-forcing strength. West's raise to 3H shows support
for East's hearts. The partnership is now committed to a heart contract at the
game level or higher. From this point onward, any suit other than hearts is a
side suit. When East bids a side suit, namely spades, at the 3 level, East is
not supporting West's spades, because support in spades is irrelevant at this
point; hearts has already been set as the suit! Instead, East's 3S bid shows a
control in spades. West's 4D bid shows a control in diamonds and <em>denies</em>
a control in clubs, because if West had a control in both clubs and diamonds,
West should have made the cheaper bid first, <i>i.e.</i>, 4C. East sees that
West has no control in clubs and, looking at their own hand, realizes that they
don't have club control, either. Therefore, East determines that a slam cannot
be made, and signs off by bidding 4H.
</p>
<p>
How do you know whether your partner's bid is a control bid, and whether it
shows first or second round control? Most players use the following convention:
</p>
<ul>
<li>
After suit agreement has been established, a side suit bid that is above three
of the agreed suit is a control bid. For example, the following bids are not
control bids:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '4C', '', '', ''))?>
</span>
West's 4C bid above is not a control bid showing control in clubs, because suit
agreement must be established before a control bid can be made. Even though
West may have support for East's hearts, East does not yet know that West has
support. Therefore, suit agreement in hearts has not been established yet. Since
suit agreement has not been established yet, West should bid 3H to establish
suit agreement before either player can make a control bid.
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2S', 'P',
                 '3C', '', '', ''))?>
</span>
In the auction above, 3C is not a control bid. Even though suit agreement in
spades has already been established, 3C is too low to be a control bid. Control
bidding must start above 3 of the agreed suit, <i>i.e.</i>, when the suit is
spades, any control bid must be higher than 3S. The meaning of the 3C bid above
depends on partnership agreement, but is typically a <em>game try suit</em>:
West is inviting East to game but also providing some information about West's
club suit that may help East make a decision. What information is West
providing? Well, that depends on partnership agreement.
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3N', ''))?>
</span>
In the auction above, 3NT is not a control bid because it is not a suit bid.
The meaning of such a 3NT bid depends on partnership agreement.
</li>
<li>
The first time a control bid is made in a particular suit, it shows either a
first or second round control in that suit. For example, in the following
auction:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3S', ''))?>
</span>
East's 3S bid shows either first or second round control in spades. West does
not know which one it is.
</li>
<li>
If a control has already been shown in a particular suit, then a second control
bid in that suit (by either player) shows specifically first-round control. For
example:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3S', 'P',
                 '4C', 'P', '4S', ''))?>
</span>
In the auction above, East first showed either a first or second round control
in spades by bidding 3S. West then showed either first or second round control
in clubs. When East bids 4S, East shows first-round control in spades. East may
or may not also have second-round control in spades. Or:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3S', 'P',
                 '4C', 'P', '4D', 'P',
                 '4S', '', '', ''))?>
</span>
In the auction above, East's bid of 3S shows either first or second round
control in spades. Eventually, West also makes a control bid in spades; West is
therefore showing first-round control in spades. In this case, it is possible to
deduce that E&ndash;W has both first and second round control in spades.
</li>
<li>
If a player skips over a possible control bid, it means the player could not
make the skipped-over bid because they don't have the control that that bid
would indicate. For example:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '4C', ''))?>
</span>
In the auction above, East does not have first or second round control in spades
and therefore could not have bid 3S. West, seeing that East chose to skip over
3S and bid 4C instead, knows that East does not have either first or second
round control in spades. West will abort slam bidding unless West has first or
second round control in spades. Or:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '3S', 'P',
                 '4C', 'P', '4D', 'P',
                 '5C', 'P', '6H', 'P',
                 'P', 'P', '', ''))?>
</span>
In the auction above, East first shows a first or second round control in
spades. West then shows a first or second round control in clubs by bidding 4C,
which is followed by East's 4D bid, showing first or second round control in
diamonds. West then skips over 4S and bids 5C. This implies that West does not
have first-round control in spades. East, who happens to only have second-round
control in spades, realizes that a grand slam is not possible, and settles
instead for a small slam, 6H.
</li>
</ul>
<h3>Alerting control bids</h3>
<p>
A control bid is an artificial bid because it does not suggest that the suit bid
as an appropriate suit for the contract. For example, suppose we have:
<span class="auctionContainer">
<?=auction(array('1S', 'P', '2H', 'P',
                 '3H', 'P', '4C', 'P',
                 '4H', 'P', 'P', 'P'))?>
</span>
East's 4C bid is a control bid and East is not suggesting clubs as a suit to
play in; East is merely showing a control in clubs. The final contract will
never be in any suit other than hearts. As a result, this 4C bid is considered
artificial and must be alerted. However, the ACBL alert procedures have a
special rule about control bid alerts: they must be delayed until the end of the
auction. Thus, in the auction above, West should not alert when East's 4C bid is
made. Instead, West waits until after all players have passed, <em>then</em>
provides the alert.
</p>
<h3>When to start and stop control bidding</h3>
<p>
Before making a control bid, you must ensure that suit agreement has already
been established by a previous bid, since any bid made prior to suit agreement
cannot be a control bid. Besides that, a control bid is always an invitation to
slam. Consider what you know about your partner's strength. If your partner has
a maximum based on what they've shown so far, would your partner's hand plus
your hand be strong enough for slam? If the answer is no, then don't make a
control bid. Instead, just bid game in the agreed suit. If your partner has
already bid game, then just pass. For example:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '3S', 'P', '4D', ''))?>
</span>
In the above auction, suit agreement is established by West's 3S bid, and East's
4D bid is a control bid, showing a first or second round control in diamonds.
Because West bid 3S instead of going directly to 4S, West must have less than 19
points; typically, 16&ndash;18 points. East probably has 14+ points in addition
to their diamond control. With less than 14 points, East could not invite to
slam based on the total strength of the two hands. Instead of bidding 4D, East
would sign off in 4H.
</p>
<p>
Similarly, if your partner has made a control bid but you have a minimum for
your hand, you can decline the invitation by returning to the agreed suit. For
example:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '4S', 'P', '5C', 'P',
                 '5S', 'P', '', ''))?>
</span>
In the above auction, suit agreement is established by West's 4S bid. East has a
strong enough hand to invite to slam, and bids 5C to show an invitation with
club control. However, West's hand is a minimum 19&ndash;20 points, so West
feels that a slam is not in the cards. West therefore bids the suit that was
already agreed (namely, spades) at the lowest level. In this case, 4S has
already been exceeded, so West must bid 5S. If West had wanted to continue slam
bidding, then West could have showed a control or possibly even gone directly to
6H.
</p>
<p>
When one partner has all the information they need to bid
slam&mdash;<i>i.e.</i>, one partner becomes aware that the partnership holds all
required controls&mdash;that player can stop control bidding, and simply bid the
slam. The other player will then pass (usually). Here's an example:
<span class="auctionContainer">
<?=auction(array('1H', 'P', '1S', 'P',
                 '3S', 'P', '4C', 'P',
                 '4D', 'P', '6S', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above auction, East's bid shows either first or second round control in
clubs, but West doesn't know which. West's bid shows either first or second
round control in diamonds, but East doesn't know which. However, East, looking
at their own hand, sees first-round control in both clubs and hearts. East only
needed a second-round control from West in diamonds in order to make slam
feasible. Therefore, once East sees West's 4D control bid, East stops beating
around the bush and simply raises to 6S. Note that East is the <q>captain</q> of
this auction: East knows that West has limited strength (16&ndash;18 points), so
East, not West, decides how high the auction will go. West should pass 6S and
not raise to 7S, because East knows how strong West is, but not <i>vice
versa</i>.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
After suit agreement has been established, a side suit bid that is higher than
3 of the agreed suit is a control bid, which shows first or second round
control in the side suit and an invitation to slam. Control bids must be
alerted at the end of the auction.
</li>
<li>
A player who is not strong enough to invite to slam should not make a control
bid but should instead sign off in game in the agreed suit.
</li>
<li>
A player who is not strong enough to accept a slam invitation should respond to
a control bid by rebidding the agreed suit at the lowest available level rather
than making another control bid.
</li>
<li>
The first time a control bid is made in a particular suit, it shows either a
first or second round control in that suit. The second time a control bid is
made in a particular suit, it shows a first round control. This is true
regardless of whether the two control bids were made by the same player or by a
player and their partner.
</li>
<li>
A player who makes a control bid should make the <q>cheapest</q> control bid
available.
</li>
<li>
When a player has determined that a slam is viable, there is no need for further
control bidding; that player should bid the slam.
</li>
<li>
If a player believes that sufficient strength exists for a slam but the slam is
not viable because the control bidding sequence has revealed that the necessary
controls are missing, the player should rebid the agreed suit at the lowest
available level (similarly to declining an invite to slam).
</li>
</ul>

