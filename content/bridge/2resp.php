<h2>Non-game-forcing suit bids at the two level and higher</h2>
<p>
In this section, we discuss situations where the opener has bid 1 of a suit, and
eventually, either opener or responder bids a suit at the 2 or higher level.
Recall that a 2/1 game forcing sequence starts with one partner opening 1 of a
suit, and their partner responding 2 of a lower suit. In that case, the 2-level
bid is the second bid in the auction. A 2-level bid that is not the second bid
in the auction is <strong>not</strong> 2/1 game forcing; it does not promise
enough strength for game. In fact, it's usually not forcing at all.
</p>
<h3>Opener rebids their own suit</h3>
<p>
Consider the auction below:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&hearts;', 'P', 'P', 'P'))?>
</span>
In <a href="http://brianbi.ca/bridge/1resp">Subsequent bidding at the one
level</a>, we discussed the possibility that, after opener bids 1 of a suit, and
responder bids 1 of a different suit, and opener still doesn't have a fit,
opener might bid 1NT. However, opener can also rebid their own suit, in the hope
that a fit might still exist. Because the opening bid showed 5+ hearts, opener
must have at least 6 hearts in order to bid hearts a second time. If opener only
had 5 hearts, it would be pointless to bid hearts again, knowing that partner
does not have 3 hearts. Similarly, if opener bids 1 of a suit and responder bids
1NT, opener might want to rebid their own suit instead of giving up on finding a
fit.
</p>
<p>
If opener originally bid a minor suit, they can also rebid that minor suit with
at least 6. (Why not 5? Well, if opener has 5 of a minor suit, then in theory,
there might be value to rebidding that suit, to show partner that they have more
than 4. But in practice, recall that minor suit fits are not as valuable as
as major suit fits. So if opener has only 5 of their minor suit, then chances
are that the partnership belongs in notrump.)
</p>
<p>
In <a href="http://brianbi.ca/bridge/support-major">Supporting a major suit</a>,
we discussed how, when showing support for partner's major suit, the level of
the bid you make signals how much strength you have; making a jump bid shows at
least game-invitational strength. It is useful to follow a similar convention
when opener rebids their own suit (even though a fit has not been found yet): if
opener has 6+ of their suit and plans to rebid it, then they should make a jump
rebid (that is, bid it at the 3 level instead of the 2 level) when they have
game-invitational strength, that is, roughly 16&ndash;18 points. If opener has
only 12&ndash;15 points, they should make a regular rebid at the 2 level. This
helps opener's partner judge whether the partnership has enough strength to bid
game.
</p>
<p>
For example, with the following hand:
<?=ch('Q92', 'AQ9874', 'AT', 'J9')?>
you should open 1&hearts;. If your partner responds 1&spades; or 1NT, then you
should bid 2&hearts; to show 6+ hearts and 12&ndash;15 points. If your partner
has at least 2 hearts and invitational strength, they can show support by
bidding 3&hearts;. If they have at least 2 hearts and 13+ points, they can go
directly to 4&hearts; since they know that you have at least 6 hearts and 12
points.
</p>
<p>
With the following:
<?=ch('Q98', 'KQJT96', 'A7', 'KJ')?>
you are too strong to rebid 2&hearts;. You should bid 3&hearts; after your
partner's 1&spades; or 1NT response. If your partner has at least 2 hearts and
at least 9 points, then they should raise to 4&hearts; since they know that you
have at least 16 points.
</p>
<p>
Remember that finding major suit fits is more important than finding minor suit
fits, so if you have the following:
<?=ch('AJ32', 'A8', 'A98743', '6')?>
which you open 1&diams;, then, if your partner responds 1&hearts;, you should
bid 1&spades; next, not 2&diams; There still might be a 4&ndash;4 spade fit, and
trying to find that fit is a higher priority than telling your partner that you
have 6 diamonds.
</p>
<h3>Opener introduces a new suit at the 2 level</h3>
<p>
We previously mentioned the following auction:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&clubs;', 'P', 'P', 'P'))?>
</span>
In this auction, opener, seeing that they can't support their partner's spade
suit, could have bid 1NT as discussed in <q>Subsequent bidding at the one
level</q>. However, bidding a different suit is also an option.
</p>
<p>
To introduce the new suit, clubs, in this auction, opener should ideally have
some reason to believe that clubs might be a good suit to play in. So, normally,
opener shouldn't make this bid unless they have at least 4 clubs. A suit holding
with fewer than 4 cards is usually not worth showing. In this particular
auction, opener has 5+ hearts for sure, and probably has 4+ clubs, although
that's not guaranteed. Opener is probably making this bid because their hand is
unbalanced, which makes a suit contract seem more attractive than notrump. Here
are two examples of hands that opener might have that would lead them to rebid
2&clubs; in the auction shown above:
<span style="display: block">
<?=csh('AQ4', 'QJT65', '', 'KJT72')?>
<?=csh('A7', 'KQT86', 'K5', 'A875')?>
</span>
With the first hand, bidding 1NT is possible, but perhaps not the best choice;
if partner raises to 3NT, there may be problems in diamonds. It is sensible to
bid 2&clubs; first to try to locate a fit in clubs. With the second hand,
opener is <q>semi-balanced</q>, and a notrump contract seems plausible, but
opener should not rebid 1NT because such a 1NT rebid would show minimum
strength, 12&ndash;15 points. Opener should bid 2&clubs; instead.
</p>
<p>
The above auction is also possible if East bids 1NT instead of 1&spades;:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1NT', 'P',
                 '2&clubs;', 'P', 'P', 'P'))?>
</span>
In this case, West, by showing a second suit, is communicating either a
reluctance to play in 1NT because of their unbalanced hand, or simply wants to
keep bidding because there is still a possibility of a game. (This will be the
case when West's hand is not a minimum.) For example, West could have one of
the following hands:
<span style="display: block">
<?=csh('AQ4', 'QJT65', '', 'KJT72')?>
<?=csh('A7', 'KQT86', 'K5', 'A875')?>
<?=csh('AK98', 'KJT86', '2', 'QJ2')?>
</span>
The first hand above was previously discussed; a club contract might be
preferable to notrump. (Since East bid 1NT, does East necessarily have a stop in
diamonds? No, because East has made a semi-forcing 1NT bid here, as discussed in
the previous section. The semi-forcing 1NT bid shows 6&ndash;12 points and that
East did not have any better bid available.) The second hand was also
previously discussed; here, West has 16 HCP. West could pass East's bid with a
minimum, but this hand is not a minimum, so West bids 2&clubs;. The third hand
has 14 HCP and an unbalanced distribution and this time, West doesn't have 4
clubs. Even still, West must bid something, since West's partner made the
semi-forcing 1NT bid. West should not bid 2&spades;, because that carries a risk
of forcing the partnership too high, if East cannot support spades. West should
bid 2&clubs; despite only having 3 clubs, because it is the least of all
evils.
</p>
<p>
To be continued
</p>
