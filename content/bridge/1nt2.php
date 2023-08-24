<h2>The Jacoby transfer</h2>
<p>
The Jacoby transfer is a convention used by responder to show a 5-card major
after an opening bid of 1NT. This convention, together with Stayman (which we
will discuss in the next section), are the two most popular of all bidding
conventions, and the first artificial bids that beginning players should learn.
The 1NT opening, and a subsequent Jacoby or Stayman bid by opener's partner,
begin very precise bidding sequences that allow the final contract to be placed
with a high degree of confidence.
</p>
<h3>How to bid a Jacoby transfer</h3>
<p>
A 2D response to a 1NT opening bid shows 5 <em>hearts</em> (not diamonds). A 2H
response to a 1NT opening bid shows 5 spades. In other words, responder can show
a 5-card major (or longer) by bidding the suit immediately below that major
suit. Such a bid is clearly artificial: it doesn't show the actual suit bid.
Like all other artificial bids, the Jacoby transfer is forcing. The vast
majority of the time, opener simply rebids 2 of the suit that their partner has
shown. So if you open 1NT and your partner responds 2D, your next bid should be
2H. This is called <q>accepting the transfer</q>.
</p>
<p>
The Jacoby transfer must be announced. To be precise, after you have opened 1NT,
and your partner makes a bid that shows a suit other than the actual suit bid,
you must announce the suit shown by the bid, immediately and without prompting.
Do not wait for your turn before making the announcement; the opponents must be
informed about what your partner's bid means, immediately after that bid is
made. For example, if you open 1NT and partner responds 2H, you must announce
<q>spades</q> before your right-hand opponent bids. When it is your turn, you
should accept the transfer by bidding 2S.
</p>
<p>
You might wonder why the player who holds the 5-card major doesn't just bid that
suit themselves. There are two reasons. The first is that the notrump opener
usually has the stronger hand. Suppose your partner has opened 1NT, and you want
to show a 5-card heart suit. If you bid hearts yourself, and you eventually end
up in a hearts contract, you will be declarer, since you were the first one to
introduce hearts. That means your hand will be hidden, and your partner's hand
will be on display to the opponents. They will know where most of the high cards
are, since most of the high cards are in your partner's hand, not yours. This
makes it easier for the opponents to take tricks. It would be better for your
side if your hand, being weak, were on display, and your partner's hand were
hidden. So the idea is to use the Jacoby transfer to make your partner bid the
suit that you are likely to end up playing in, making them declarer.
</p>
<p>
The second reason why Jacoby transfers are useful is that they are an example of
a <q>relay</q> system, in which the player who has something to say forces their
partner to bid, in order to give themselves an opportunity to bid again.
Suppose you, as responder, have 5 spades, and you're not using Jacoby transfers,
so you plan on bidding spades directly. Here's the problem: if your hand is very
weak, then you really want your partner to pass after you bid 2S, but if your
hand is intermediate to strong, then you really want your partner to
<em>not</em> pass, so that you can bid again and eventually reach game or slam.
Therefore, you must reserve 2S for weak hands, and some other forcing bid for
stronger hands. But if you play Jacoby transfers, then you don't need to define
two different bids. You simply bid 2H, regardless of how strong your hand is.
When your partner accepts the transfer by bidding 2S, you pass if your hand is
weak. If your hand is strong, you bid again.
</p>
<h3>Jacoby transfer with a weak hand</h3>
<p>
When holding a 5-card major, it is appropriate to bid a Jacoby transfer no
matter how weak your hand is. For example, if your partner opens 1NT and you are
dealt the following hand, you should bid 2D:
<?=ch('J4', 'T9542', 'T98', '863')?>
If you pass and your partner plays in notrump, it is likely that your hand will
not be able to win even a single trick. Your partner will probably take about
4 or 5 tricks, when they need 7 to make the contract. If, on the other hand, you
bid 2D to transfer your partner into a final contract of 2H, they will need 8
tricks, but your hand will almost always contribute at least one heart trick,
usually two&mdash;because once your opponents are out of hearts, since hearts
are trump, all your remaining hearts are good. So that would mean your side
would usually get 6 or 7 tricks when you need 8 to make the contract. And, just
because your partner has the ability to get to your hand in the first place,
they now have an opportunity to take a finesse into their hand, e.g., to try to
win a trick with the queen of clubs (if they have the ace and the queen). So
that gives the potential for an additional trick. All in all, even though using
the Jacoby transfer increases the level of the contract, it also usually means
your side won't go down as many tricks as it would have in 1NT.
</p>
<p>
The Jacoby transfer will sometimes result in only a 7-card fit instead of the
more desirable 8-card fit. This will happen when responder has only five cards
in their major suit, and opener only has two cards in that suit. Provided that
the level of the contract is kept low, it will still be possible to make the
contract a decent fraction of the time. When responder's hand is weak, then
they should bid the Jacoby transfer and pass after their partner accepts; this
might be a 7-card fit, but all the partnership can do is hope for the best. But
if there is a chance of reaching game, responder should bid again in order to
help their partner determine the best final contract. We will discuss this in
the next subsection.
</p>
<h3>Jacoby transfer with a game-forcing hand</h3>
<p>
Suppose you have opened 1NT, and the auction so far has proceeded as follows:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&hearts;', 'P',
                 '2&spades;', 'P', '3N', 'P',
                 '?', '', '', ''))?>
</span>
The question mark indicates that it's your turn to bid. What do you do? Well,
first you have to figure out what your partner is trying to tell you. Your
partner's first bid, 2H, was a Jacoby transfer, which, per your partnership
agreement, shows that your partner has five spades. You (hopefully) announced
<q>spades</q> as required. Then, on your second bid, you dutifully accepted the
transfer. Your partner rebid 3NT.
</p>
<p>
Evidently, your partner's hand is not weak. In fact, your partner must have
game-forcing strength, because they have raised the bidding to the game level.
So that's what you know about your partner's hand: they have five spades and
game-forcing strength. For example, your partner might have a hand such as the
following:
<?=ch('KQJ82', 'A54', 'J32', 'J5')?>
A player who holds the above hand should bid exactly as shown in the auction
above: first a Jacoby transfer, then a raise to 3NT.
</p>
<p>
Now, back to opener. Opener knows that responder has five spades. Opener may or
may not have support for spades. With support, opener has the option of
<q>correcting</q> their partner's 3NT bid to 4S. For example, if opener has the
following hand:
<?=ch('A65', 'Q82', 'AQT', 'K983')?>
then the auction might go like this:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&hearts;', 'P',
                 '2&spades;', 'P', '3N', 'P',
                 '4&spades;', 'P', 'P', 'P'))?>
</span>
Opener, seeing three spades in their own hand, notices that they have support
for partner's spade suit, and sets 4S as the final contract. On the other hand,
if opener's hand had been as follows:
<?=ch('A6', 'Q82', 'AQT5', 'K983')?>
the bidding would have gone:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&hearts;', 'P',
                 '2&spades;', 'P', '3N', 'P',
                 'P', 'P', '', ''))?>
</span>
In this case, opener only has two spades, which means that a spade contract
would be played in a likely 5&ndash;2 fit; not ideal for a game. Opener thus
prefers to play the game in notrump. By passing, opener leaves 3NT as the final
contract.
</p>
<p>
Finally, what about the following variation? When East (responder) goes directly
to 4S, without bidding 3NT, what is East saying?
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&hearts;', 'P',
                 '2&spades;', 'P', '4&spades;', 'P',
                 'P', 'P', '', ''))?>
</span>
When West accepts the transfer, bidding 2S, West is not showing support for
spades. West's bid of 2S was a forced response to East's Jacoby transfer bid of
2H. Yet East immediately raised from 2S to 4S. This implies that East has
<em>six</em> spades (or, on rare occasions, even more). East knows that West has
at least two spades for the opening 1NT bid (except in rare occasions where West
chooses to open 1NT with a singleton). So East, knowing about a 6&ndash;2 fit,
knows that the final contract should be in spades. East also evidently has
enough strength to force to game. (There is also another way for East to show
game-forcing strength with at least 6 spades, but we won't discuss it right
now.)
</p>
<h3>Jacoby transfer with an invitational hand</h3>
<p>
Jacoby transfers can also be used with invitational hands. The responder rebid
that shows an invitational hand, as opposed to a game-forcing hand, is 2NT. Like
the 3NT bid discussed in the previous subsection, 2NT can be thought of as a
natural bid: responder is indicating that, in addition to having 5 of their
major suit (which they already showed by bidding the Jacoby transfer), they
possess enough strength for 2NT, while being unsure about 3NT.
</p>
<p>
For example, if responder holds the following hand:
<?=ch('K6', 'AJ954', 'T83', '653')?>
the auction might begin like so:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&diams;', 'P',
                 '2&hearts;', 'P', '2N', 'P',
                 '?', '', '', ''))?>
</span>
Opener, having been invited to game, should accept the invitation if they are on
the high end (that is, a good 16 to 17 points), and decline if they are on the
low end (that is, 15 to a poor 16). For example, if opener holds the following
hand:
<?=ch('Q2', 'KQ8', 'A942', 'AQ94')?>
they should accept the invitation. And since their partner has already shown 5
hearts, opener, with 3 hearts, is aware of the existence of a fit, and should
bid the major suit game, 4H. If opener's hand had instead been:
<?=ch('Q82', 'KQ', 'A942', 'AQ94')?>
then, holding only 2 hearts, but wishing to accept the invitation to game,
opener should raise their partner's 2NT bid to 3NT.
</p>
<p>
With the following hand, opener should decline their partner's invitation:
<?=ch('Q2', 'K86', 'A942', 'AQ94')?>
Notice that this hand is 2 HCP weaker than the previous two hands. Although
opener has decided to decline the invitation, opener is aware of the existence
of a 5&ndash;3 heart fit, so they should prefer to play in a heart contract
rather than notrump. Therefore, opener should bid 3H in the above auction.
Finally, if opener had a similar hand but without a fit:
<?=ch('Q82', 'K6', 'A942', 'AQ94')?>
then opener can decline the invitation simply by passing, letting 2NT stand as
the contract.
</p>
<p>
In the case where responder holds a 6-card heart suit, responder can invite to
game using the following sequence:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&diams;', 'P',
                 '2&hearts;', 'P', '3&hearts;', 'P',
                 '?', '', '', ''))?>
</span>
In this sequence, because responder already showed 5 hearts with their 2D bid,
but then bid hearts again without evidence of their partner having support,
responder must have 6 hearts. Opener can accept the invitation by raising to 4H,
or decline by passing. In this case, opener is not asked to choose between
hearts and notrump, because responder's 6-card heart suit guarantees the
existence of a 8-card fit in hearts.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
When a player opens 1NT, and their partner holds a 5-card major, they should bid
a Jacoby transfer by bidding 2 of the suit immediately below their major. A
Jacoby transfer should be made regardless of the strength of the responder's
hand. To restate the above: responder, having anywhere from 0 to 25 HCP,
should bid a Jacoby transfer when they have a 5-card major.
</li>
<li>
The player who opened 1NT should announce the suit shown by the transfer: in
other words, when they see their partner bid 2D, they should announce
<q>hearts</q>, and when they see their partner bid 2H, they should announce
<q>spades</q>. The announcement should be made immediately by the opener,
without waiting for their own turn.
</li>
<li>
When it is opener's turn, they are obligated to accept the transfer by bidding
the suit that their partner showed. For example, if you have opened 1NT and your
partner bid 2H, a Jacoby transfer, then on your turn, you must bid 2S.
</li>
<li>
If responder's hand is weak, they should pass after their partner has accepted
the transfer. When responder's hand is very weak, even the 7-card fit that might
result from the transfer is better than staying in 1NT.
</li>
<li>
If responder has invitational strength with 5 of their major suit, they should
bid 2NT after their partner accepts the transfer. This has four possible
outcomes:
<ul>
<li>1NT&ndash;2X&ndash;2M&ndash;2NT&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;2NT&ndash;3M&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;2NT&ndash;3NT&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;2NT&ndash;4M&ndash;P</li>
</ul>
Here, X denotes the suit immediately below the major suit, M. Notice that opener
sets the final contract, which may be 2NT, 3M, 3NT, or 4M.
</li>
<li>
If responder has game-forcing strength with 5 of their major suit, they should
bid 3NT after their partner accepts the transfer. Opener can then pass or
correct to 4M. That is, one of the following sequences should occur:
<ul>
<li>1NT&ndash;2X&ndash;2M&ndash;3NT&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;3NT&ndash;4M&ndash;P</li>
</ul>
</li>
<li>
If responder has 6 of their major, and either invitational or game-forcing
strength, they should raise after their partner accepts the transfer. That is,
one of the following sequences should occur:
<ul>
<li>1NT&ndash;2X&ndash;2M&ndash;4M&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;3M&ndash;P</li>
<li>1NT&ndash;2X&ndash;2M&ndash;3M&ndash;4M&ndash;P</li>
</ul>
</li>
<li>
Do not try to memorize the above sequences; instead, think about what
responder's rebid of 2NT, 3NT, 3M, or 4M must logically mean according to the
principles of bidding, and, as opener, think about how to use the information
given by partner to bid the optimal contract.
</li>
<li>
The above sequences enable opener and responder to cooperate to set the final
contract very accurately whenever the bidding starts with 1NT followed by a
Jacoby transfer. Notice that responder was able to give precise information
about whether they hold 5 or 6 cards in their major suit, and this information
enables opener to precisely pinpoint whether or not there is a major suit fit.
If responder holds only a 4 card major, they should use the Stayman convention
instead, which is discussed in the next section.
</li>
