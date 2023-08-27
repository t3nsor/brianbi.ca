<h2>The 2NT opening bid</h2>
<p>
For most players, a 2NT opening bid shows a strong, balanced or semi-balanced
hand. The most common point range is 20&ndash;21, although minor variations are
very common (for example, 19&ndash;21, and so on). When your partner opens 2NT,
do <strong>not</strong> announce the point range, even though the point range is
announced for 1NT opening bids.
</p>
<h3>Jacoby transfer over 2NT</h3>
<p>
A response of 3D or 3H to a 2NT opening is a Jacoby transfer. This works exactly
like a Jacoby transfer response to 1NT: 3D means 5+ hearts, and 3H means 5+
spades. Opener must announce <q>hearts</q> or <q>spades</q>, respectively, then
accept the transfer at their turn. If responder is very weak (1&ndash;4 points),
then they will pass after their partner has accepted the transfer:
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&diams;', 'P',
                 '3&hearts;', 'P', 'P', 'P'))?>
</span>
In the auction above, East has shown 5+ hearts. West's bid of 3H was forced, and
does not imply support for hearts. East passed because their hand is so weak
that even opposite a 2NT opener, it still isn't enough to go to game. East used
the Jacoby transfer only for the purpose of improving the contract slightly.
Playing 2NT opposite a very weak hand is typically disastrous.
</p>
<p>
If responder is not weak, they should bid again:
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&diams;', 'P',
                 '3&hearts;', 'P', '3N', 'P',
                 '?', '', '', ''))?>
</span>
Responder, having bid 3NT, evidently has enough strength for game. If opener has
3+ hearts, opener should now correct to 4H, since responder is known to have 5
hearts. Otherwise, opener should pass since there is no fit, leaving 3N as the
final contract.
</p>
<p>
If responder has 6 of their major and 5+ points, then they can raise to 4M
directly:
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&hearts;', 'P',
                 '3&spades;', 'P', '4&spades;', 'P',
                 'P', 'P', '', ''))?>
</span>
In the auction above, since responder has 6 spades, they know that there is a
fit since opener must have at least 2 (other than in rare cases when opener will
have a singleton ace, king, or queen). Thus, responder immediately knows that a
spade fit exists and that the contract should be 4 spades. Responder uses the
Jacoby transfer only for the purpose of getting opener, who has a stronger hand,
to mention spades first, becoming declarer. Once opener has accepted the
transfer by bidding 3S, responder simply raises to 4S.
</p>
<h3>Stayman over 2NT</h3>
<p>
A response of 3C to a 2NT opening is Stayman. Because there is no room to stop
below a 3NT game, responder should only bid Stayman with 5+ points (game-forcing
strength opposite a 3NT opening). Opener should rebid 3D to deny a 4-card major,
3H to show 4+ hearts, or 3S to show 4+ spades.
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&clubs;', 'P',
                 '3&hearts;', 'P', '4&hearts;', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above auction, West has 4+ hearts and thus gave a positive response to
East's 3C bid, Stayman. East, who must have had game-forcing strength to bid
Stayman in the first place, has 4 hearts. Seeing that a 4&ndash;4 fit has been
found, East raises 3H to 4H.
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&clubs;', 'P',
                 '3&diams;', 'P', '3N', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above auction, West has no 4-card major. East, having 5+ points but no
fit, knows that the correct final contract is 3NT.
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&clubs;', 'P',
                 '3&spades;', 'P', '3N', 'P',
                 'P', 'P', '', ''))?>
</span>
In the above auction, West has 4+ spades, but less than 4 hearts. East's major
was hearts, so East did not find the fit that they were hoping for. Since there
is no major suit fit, the hand should be played in notrump. So responder's rebid
is 3NT.
<span class="auctionContainer">
<?=auction(array('2N', 'P', '3&clubs;', 'P',
                 '3&hearts;', 'P', '3N', 'P',
                 '4&spades;', 'P', '', ''))?>
</span>
In the above auction, West has both 4+ hearts and 4+ spades. When West bids 3H,
this is not the response East was hoping for; East only has 4 spades. So East
bids 3NT since no fit has been found. But West, now realizing that East has
spades, is aware of a 4&ndash;4 fit in spades, and corrects 3NT to 4S.
</p>
