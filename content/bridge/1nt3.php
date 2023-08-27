<h2>Stayman</h2>
<p>
In the previous section, we discussed the Jacoby transfer, used by responder to
show a 5-card major (or longer) after their partner has opened 1NT. If responder
has only a 4-card major, they might be interested in whether their partner can
provide 4-card support for that same major. To do so, responder uses the Stayman
convention. The Jacoby transfer and Stayman are the two most popular of all
bidding conventions, and the first artificial bids that beginning players should
learn. The 1NT opening, and a subsequent Jacoby or Stayman bid by opener's
partner, begin very precise bidding sequences that allow the final contract to
be placed with a high degree of confidence.
</p>
<h3>When and how to bid Stayman</h3>
<p>
A 2C response to a 1NT opening bid is the Stayman convention. Stayman should be
used when responder has at least one 4-card major. Unlike a Jacoby transfer,
which should be made regardless of strength, Stayman should only be bid when
responder has at least an invitational hand. The reason for this is that, while
a Jacoby transfer lands the partnership in at least a 7-card fit, Stayman has no
such guarantee (opener might have only 2 cards in responder's major). Therefore,
playing in responder's major suit might not be an option. The partnership must
be prepared for the possibility that, after responder's Stayman bid, no suit fit
is found and the contract must be played in notrump. Because responder has made
a bid at the 2 level, the lowest notrump level available is 2NT. Thus, responder
should bid Stayman only if they have at least enough strength to make 2NT.
</p>
<p>
Unlike a Jacoby transfer, Stayman should not be announced, nor should it even be
alerted.
</p>
<p>
After partner opens 1NT, you should bid 2C, Stayman, with the following hands:
<span style="display:block">
<?=csh('J86', 'AKT7', '952', 'Q94')?>
<?=csh('8432', 'K7', 'A', 'KQ8632')?>
<?=csh('QT63', 'AT93', 'K95', '86')?>
<?=csh('AQT2', 'AJ9', 'Q8', 'KQ64')?>
</span>
All of the above hands have a 4-card major (possibly two 4-card majors) and at
least invitational strength. The second hand above has a good 6-card club suit,
but you must remember that major suits are more important, and the contract
should only be played in a minor suit if there is no major suit fit. So you must
bid 2C, Stayman, to show that you have a 4-card major, even though it is more
likely that the contract will eventually be played in clubs. The third hand has
two 4-card majors; you should still bid Stayman, and we will discuss below how
to deal with the fact that you have both. The last hand above has 18 HCP. There
is no upper limit on strength for Stayman, so you should bid 2C even in that
case. Slam is probably in the cards, but you are in no hurry to get there.
</p>
<p>
You should not bid Stayman with the following hands:
<span style="display:block">
<?=csh('JT92', 'J6', 'KJT65', '53')?>
<?=csh('AQJ84', 'J7', '52', 'Q972')?>
</span>
The first hand is too weak: its strength is below invitational. The second hand
has a 5-card major, so the appropriate response is 2H, which is a Jacoby
transfer to spades. A Jacoby transfer gives more information than Stayman, since
it shows 5 cards in a major instead of 4. If you bid Stayman instead of a Jacoby
transfer, it will be impossible to convince your partner later that you actually
have five cards in your major suit, so you might not reach the optimal contract.
</p>
<h3>Opener's response to Stayman</h3>
<p>
When responder bids Stayman, showing an unspecified 4-card major, responder is
asking opener whether opener has a 4-card major. If so, then a 4&ndash;4 major
fit may exist (provided that opener's major is the same as responder's major).
Thus, if opener has a 4-card major, they should bid it. For example, if you have
opened 1NT and your partner has responded 2C, then with the following hand, you
should bid 2S:
<?=ch('Q864', 'AQ5', 'KJT2', 'A7')?>
With the following hand, you should bid 2H:
<?=ch('94', 'AQ83', 'AK64', 'QJT')?>
If you have both 4 spades and 4 hearts, you should bid the heart suit first. The
reason for this convention is a bit obscure and will be discussed in a more
advanced section. For now, just think of it as being similar to the situation
with <a href="/bridge/1resp">1-level suit responses</a>: typically, we start by
bidding the lowest suit we have, so that skipping over a suit denies having that
suit. It's more complicated when you do it the other way around! So with the
below hands, you would bid 2H:
<span style="display:block">
<?=csh('K972', 'QJ86', 'AK3', 'QJ')?>
<?=csh('KJT3', 'K9863', 'AQ', 'K4')?>
</span>
Not all players would open 1NT in the second case, since the hand contains a
5-card major. Nevertheless, if you have chosen to open this hand 1NT, then when
your partner bids 2C, Stayman, you must respond 2H. You don't need a separate
convention to tell your partner that you have more hearts than they asked for
(5 as opposed to 4).
</p>
<p>
If your partner has bid 2C, Stayman, and you don't have any 4-card major, then
you should respond 2D. This artificial bid does not show diamonds; it is merely
the negative response to Stayman. For example, respond 2D with the following
hand, because it doesn't have a 4-card major. The fact that it only contains 2
diamonds is not relevant:
<?=ch('AT5', 'KQ4', 'AJ', 'J8543')?>
</p>
<h3>Responder's rebid with support</h3>
<p>
If responder has used Stayman, and opener has shown the 4-card major that
responder holds, or if responder holds both majors and opener has shown either
major, then responder is happy because a 4&ndash;4 fit has been found in a known
suit. If responder has enough strength to go to game, then they should simply
bid 4 of the major. If responder does not have enough strength to go to game,
then they should bid 3 of the major and let opener decide whether to accept the
invitation. For example, when East holds the following hand from above, which is
of game-forcing strength:
<?=ch('J86', 'AKT7', '952', 'Q94')?>
the following auction is possible:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '4&hearts;', 'P',
                 'P', 'P', '', ''))?>
</span>
East bid 4H because West's 2H bid showed 4-card support for East's heart suit.
If East holds the following hand, which is of invitational strength:
<?=ch('83', 'AJ43', 'K7542', '74')?>
then the auction might start like this:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '3&hearts;', 'P',
                 '?', '', '', ''))?>
</span>
East's 3H bid shows 4-card support for West's 4-card heart suit, and West has
the final decision of whether to raise to 4H or pass. As with all other
invitations, West should accept the invitation (bid 4H) with a maximum.
</p>
<h3>Responder's rebid without support</h3>
<p>
If opener's response to Stayman was 2D, denying a 4-card major, then responder
knows there is no major suit game. Having tried and failed to find a major suit
fit, one obvious option is to bid 3NT if they have game-forcing strength. As
with most 3NT bids, this bid is <q>to play</q>, <i>i.e.</i>, it simply means
<q>I think 3NT should be our final contract</q>. For example, the following
sequence is possible:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&diams;', 'P', '3N', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above sequence, opener's 2D bid denies having any 4-card major, and
responder, having game-forcing strength, sets the notrump game 3NT as the final
contract. If, on the other hand, responder had only invitational strength, they
should bid 2NT, which is an invitation to 3NT.
</p>
<p>
If opener showed a major suit, but it is not the one that responder has, then by
the same logic, responder, knowing that there is no major suit fit, should bid
3NT with a game-forcing hand, or 2NT with an invitational hand. However, it
might also happen that opener has <em>both</em> majors. That means the following
sequence is possible:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '3N', 'P',
                 '4&spades;', 'P', '', ''))?>
</span>
West showed 4 hearts with their 2H bid. East, by bidding 3NT, has effectively
said to partner, <q>that's not what I wanted to hear</q>. West now realizes that
East has 4 spades, not 4 hearts. If West also has 4 spades, then West is now
aware of a 4&ndash;4 fit. For this reason, West has <q>corrected</q> 3NT to 4S,
knowing that the major suit game is preferable since a fit exists. Note that if
West did not have 4 spades, they would simply pass, leaving 3NT as the final
contract.
</p>
<p>
Similarly, consider what could happen if responder's rebid were 2NT:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&hearts;', 'P', '2N', 'P',
                 '?', '', '', ''))?>
</span>
Responder is saying that their major is spades, not hearts. And responder has an
invitational hand. Opener can decline the invitation by passing, or accept by
raising to 3NT. If opener has both majors, then opener, seeing that responder
has support for their spades, can also bid either 4S or 3S.
</p>
<p>
When opener's rebid is 2S, opener cannot have hearts. So, for example, in the
following auction:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2&clubs;', 'P',
                 '2&spades;', 'P', '2N', 'P',
                 '?', '', '', ''))?>
</span>
the only possibilities are for opener to pass or to raise to 3N.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
After a 1NT opening bid, responder's bid of 2C is Stayman, showing invitational
strength or greater, and asking opener for a 4 card major.
</li>
<li>
Opener's responses to Stayman are 2D to deny a 4-card major, 2H to show 4+
hearts, or 2S to show 4+ spades. If opener has both 4+ hearts and 4+ spades, the
appropriate response is 2H.
</li>
<li>
If opener has shown the suit that responder has, responder should raise to 4M
(if responder has game-forcing strength) or 3M (if responder has only
invitational strength). In the latter case, opener can accept the invitation by
bidding 4M.
</li>
<li>
If opener has bid 2D, denying any 4-card major, responder should bid 3NT with a
game-forcing hand, or 2NT with a merely invitational hand (which opener can then
raise to 3NT if opener has a maximum).
</li>
<li>
If opener has bid a 4-card major but it is not the one responder has, then
responder should rebid 3NT or 2NT as above. But if opener has shown hearts and
responder rebid 2NT or 3NT, then if opener also has spades, opener has the
option of correcting to spades, setting 3S or 4S as the final contract.
</li>
