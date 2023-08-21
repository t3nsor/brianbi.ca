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
<p>
The bids that we will discuss in this section are all <q>natural</q> bids; they
are not part of any conventions. Partnerships often do not have any specific,
hard agreements about what natural bids mean. To interpret a natural bid, one
should apply general principles of bidding. This section explains the
applications of those principles to a few different situations.
</p>
<h3>Opener rebids their own suit</h3>
<p>
Consider the auction below:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&hearts;', 'P', 'P', 'P'))?>
</span>
In <a href="/bridge/1resp">Subsequent bidding at the one
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
In <a href="/bridge/support-major">Supporting a major suit</a>,
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
you should open 1H. If your partner responds 1S or 1NT, then you should bid 2H
to show 6+ hearts and 12&ndash;15 points. If your partner has at least 2 hearts
and invitational strength, they can show support by bidding 3H. If they have at
least 2 hearts and 13+ points, they can go directly to 4H since they know that
you have at least 6 hearts and 12 points.
</p>
<p>
With the following:
<?=ch('Q98', 'KQJT96', 'A7', 'KJ')?>
you are too strong to rebid 2H. You should bid 3H after your partner's 1S or 1NT
response. If your partner has at least 2 hearts and at least 9 points, then they
should raise to 4H since they know that you have at least 16 points.
</p>
<p>
Remember that finding major suit fits is more important than finding minor suit
fits, so if you have the following:
<?=ch('AJ32', 'A8', 'A98743', '6')?>
which you open 1D, then, if your partner responds 1H, you should bid 1S next,
not 2D There still might be a 4&ndash;4 spade fit, and trying to find that fit
is a higher priority than telling your partner that you have 6 diamonds.
</p>
<h3>Opener introduces a new suit at the 2 level</h3>
<p>
We previously mentioned the following auction:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&clubs;', '', '', ''))?>
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
2C in the auction shown above:
<span style="display: block">
<?=csh('AQ4', 'QJT65', '', 'KJT72')?>
<?=csh('A7', 'KQT86', 'K5', 'A875')?>
</span>
With the first hand, bidding 1NT is possible, but perhaps not the best choice;
if partner raises to 3NT, there may be problems in diamonds. It is sensible to
bid 2C first to try to locate a fit in clubs. With the second hand, opener is
<q>semi-balanced</q>, and a notrump contract seems plausible, but opener should
not rebid 1NT because such a 1NT rebid would show minimum strength, 12&ndash;15
points. Opener should bid 2C instead.
</p>
<p>
A variation of the above auction is shown below:
<span class="auctionContainer">
<?=auction(array('1&diams;', 'P', '1NT', 'P',
                 '2&clubs;', '', '', ''))?>
</span>
Since opener's bid was in a minor suit, responder's 1NT is natural (not
semi-forcing), showing 6&ndash;10 points. In this case, when opener chooses to
rebid 2C, that bid is not forced. It does not show a balanced hand, since if
opener had a balanced hand, they would either pass or raise notrump (or might
have opened 1NT in the first place). It can only show an unbalanced hand, and
specifically, one for which opener has reason to believe that it would be
preferable to play in clubs rather than 1NT. For example, opener might have one
of the following hands:
<span style="display: block">
<?=csh('T', '73', 'KQJ53', 'AQT2')?>
<?=csh('2', 'AKJ5', 'KJ74', 'KQ53')?>
</span>
Since East bid 1NT, East has at most 3 spades and at most 3 hearts, meaning that
most of their cards are of minor suits. In the first hand above, West has very
weak major suit holdings, and knows that East will have support for at least one
minor suit. This means 1NT is a dubious contract, but the partnership is likely
to do well in clubs or diamonds, so West bids 2C, giving East the choice between
the two suits. In the second hand above, West is weak in only one major suit,
and a notrump contract is plausible, but West wants to explore further.
Additional bidding is required in order to determine whether a game is possible
and, if so, whether or not to take a risk on 3NT, given the weakness of West's
spade suit.
</p>
<p>
Finally, consider the situation where East has made a semi-forcing 1NT bid:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1NT', 'P',
                 '2&clubs;', '', '', ''))?>
</span>
West must bid unless West has a balanced minimum. For example, West could have
one of the following hands:
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
minimum, but this hand is not a minimum, so West bids 2C. The third hand has 14
HCP and an unbalanced distribution and this time, West doesn't have 4 clubs.
Even still, West must bid something, since West's partner made the semi-forcing
1NT bid. West should not bid 2S, because that carries a risk of forcing the
partnership too high, if East cannot support spades. West should bid 2C despite
only having 3 clubs, because it is the least of all evils.
</p>
<h3>Responder rebids their own suit</h3>
<p>
When responder has bid a suit on their first bid, they might bid that same suit
again at a higher level:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&clubs;', 'P', '2&spades;', ''))?>
</span>
In the above auction, East presumably does not have 3 hearts; if East had
support for their partner's heart suit, then they would have shown support, if
not at the first bid, then the second. Equally, West does not have 4 spades. If
West had support for East's spade bid, then West would have shown support rather
than introducing a third suit.
</p>
<p>
Because East's first spade bid only showed 4+ spades, you might think that the
second spade bid could be made with 5 spades. However, if East only has 5
spades, this is not likely to be the correct bid. For example, suppose East
holds <?=rsh('AJ765', '43', 'J84', 'K72')?>. After East sees West's second bid,
East still has no idea whether West has any spades. West has shown 5 hearts and
probably 4 clubs, meaning that West on average only has 2 spades and 2 diamonds.
The partnership probably doesn't have any 8-card fit, and their combined
strength is probably not enough for a 3NT game. So East should bid 2H, landing
the partnership in a guaranteed 5&ndash;2 fit or better, instead of taking a
risk by bidding 2S, a risk that will usually not pay off. Note that if East did
not have 2 hearts, but instead had at least 3 clubs, then East might wish to
pass, resulting in a likely 4&ndash;3 club fit or better. West's 2C bid is not
forcing.
</p>
<p>
In general, when you've already bid a suit and your partner hasn't supported it,
it's usually not a good idea to rebid that same suit unless you have at least a
6-card holding. Doing so is unlikely to find an 8-card fit. In the above
auction, East is showing at least 6 spades and no support for hearts (that is,
2 hearts or fewer). Most of the time, this will find an 8-card fit, since on
average West will have about 2 spades in this auction. What about strength?
East's 2S bid can be made with a hand such as the following:
<?=ch('AJ9865', '7', 'J632', 'J4')?>
With the hand above, East cannot support either hearts or clubs. It is important
for East to be able to make an effort to improve the contract here by bidding
spades at the lowest available level (that is, 2S). This is not a 2/1 game
forcing bid, and does not require much strength. East already showed 6+ points
with their first response; they do not need extra strength to bid 2S. After all,
East is not increasing the level of the bidding; they are only trying to correct
the suit.
</p>
<p>
With invitational strength, East should jump, bidding 3S instead of 2S.
</p>
The above auction is just one example. What about this one?
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '1N', 'P', '2&spades;', ''))?>
</span>
In this case, East often has the option of passing instead of bidding 2S. If
there is no fit, 1NT is often a fine contract. However, if East believes that
2S is likely to score better than 1NT, a 2S bid may be warranted. For example,
East may have a hand such as the following.
<?=ch('QT86532', '', 'QJ6', 'K54')?>
East doesn't have a second suit to show. Furthermore, 1NT may be a disaster,
because East has a long but poor quality spade suit and it is not clear whether
there will be enough entries into East's hand to be able to cash spade winners.
If the contract is 2S instead of 1NT, most of East's spades will be able to
take tricks.
</p>
<p>
A third possible auction is:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1&spades;', 'P',
                 '2&hearts;', 'P', '2&spades;', ''))?>
</span>
As discussed earlier, West must have at least 6 hearts in order to make their
2H rebid. If East has at least 2 hearts, then East has support for West's suit.
If East does not have at least 2 hearts, but does have 6 spades, East may wish
to rebid their spade suit, keeping in mind that West has, on average, between 2
and 3 spades.
</p>
<p>
Auctions such as 1<span style="color:red">&diams;</span>&ndash;1<!--
--><span style="color:red">&hearts;</span>&ndash;1&spades;&ndash;2<!--
--><span style="color:red">&hearts;</span> and 1<span style="color:red"><!--
-->&diams;</span>&ndash;1<span style="color:red">&hearts;</span>&ndash;<!--
-->1N&ndash;2<span style="color:red">&hearts;</span> are also possible, where
responder's rebid is the first 2-level bid. Again, this is not a 2/1 game
forcing bid, because responder did not bid at the 2 level on their first bid.
In the first case, responder could bid 1NT to indicate no fit, but feels that
2H is likely to be a better contract. In the second case, responder could pass
to set the contract as 1NT, but feels that 2H is likely to be a better
contract. 1NT is often not a bad contract, so responder might not necessarily
bid 2H even if holding 6 hearts.
</p>
<h3>Responder introduces a new suit</h3>
<p>
When responder first bids 1NT, they can later introduce a new suit at the 2
level, such as in the following auction:
<span class="auctionContainer">
<?=auction(array('1&hearts;', 'P', '1N', 'P',
                 '2&clubs;', 'P', '2&diams;', ''))?>
</span>
Because responder has already limited their strength at the first bid, using the
semi-forcing 1NT response, responder's second bid is not forcing. Note that
responder's suit should be lower than opener's first suit. If responder had
spades instead of diamonds, for example, responder should have bid 1S initially,
not 1NT. Keep in mind also that opener's rebid was semi-forced, and does not
show any extra strength, nor does it even imply that opener has a good club
suit. It can be a crappy 4-card holding, or occasionally only 3 cards.
</p>
<p>
The above auction is similar in principle to other auctions we have discussed in
this section. East doesn't have support for West's hearts or clubs, and is
therefore introducing a new suit, knowing that, on average, West will only have
about 2 cards in that suit, but sometimes less. East might have a hand such as
<?=rsh('Q32', '9', 'K98762', 'KT')?>. West having a singleton in diamonds will
not be a rare occurrence (given that West's main suits are hearts and clubs), so
bidding 2D with fewer than 6 diamonds will rarely be a good choice.
</p>
<p>
The analysis is a bit different when responder has the opportunity to show a
5-card major suit on their second bid, such as in the following auction:
<span class="auctionContainer">
<?=auction(array('1&spades;', 'P', '1N', 'P',
                 '2&clubs;', 'P', '2&hearts;', ''))?>
</span>
In this case, responder might have a hand such as
<?=rsh('64', 'AKT42', 'T542', 'J8')?>. Responder could have bid 2S, but it's
possible that opener has 3 hearts, so responder bids 2H in order to explore this
possibility of a 5&ndash;3 fit. The risk still remains that opener might have a
singleton in hearts, but responder judges the risk to be worthwhile in this
case, in part because responder's heart holding is good, and in part because the
upside is greater when responder is offering a major suit to play in, rather
than a minor suit.
</p>
<p>
There are various other sequences in which responder can show a new suit at the
2 level, but most of them have an artificial meaning, which we will not discuss
in this section:
</p>
<ul>
<li>
When all four suits are different, such as 1<span style="color:red">&hearts;<!--
--></span>&ndash;1&spades;&ndash;2&clubs;&ndash;2<span style="color:red"><!--
-->&diams;</span>, most players agree that responder's rebid is an artificial
force to game and does not show diamonds.
</li>
<li>
When opener has rebid their own suit before responder introduces a third suit,
such as 1<span style="color:red">&diams;</span>&ndash;1&spades;&ndash;<!--
-->2<span style="color:red">&diams;</span>&ndash;2&clubs;, this has a forcing
and semi-artificial meaning; clubs are implied, but not promised.
</li>
<li>
When opener has made a 1NT rebid, such as in the sequence
1<span style="color:red">&diams;</span>&ndash;1<span style="color:red"><!--
-->&hearts;</span>&ndash;1N&ndash;2&clubs;, responder's rebid is once again
artificial and forcing for most partnerships.
</li>
</ul>
<h3>Summary of this section</h3>
<ul>
<li>
Opener can rebid their own suit. This shows at least 6 cards in that suit, and
lack of support for partner's suit (if any). If opener has invitational
strength, opener should make a jump rebid (that is, bid 3 of their suit rather
than 2). But opener should prefer to show weak support (that is, having 2 cards
in a suit of which their partner has shown 5) rather than rebidding a minor
suit.
</li>
<li>
Opener can introduce a new suit at the 2 level. This usually shows 4+ of that
suit, but can occasionally be a forced bid with only 3 of a minor suit. If
opener has 1NT as an available bid, or if opener has the option of passing their
partner's 1NT response, then opener should weigh the possibility of playing in
1NT as an alternative to bidding a new suit.
</li>
<li>
Responder can rebid their own suit. This shows at least 6 cards in that suit and
lack of support for partner's suit(s). Before making such a bid, responder
should weigh the alternative option of showing weak support for their partner's
first-bid suit (<i>i.e.</i>, support that is not good enough to guarantee an
8-card fit, but does guarantee a 7-card fit), or passing in order to play in
partner's second-bid suit (for which, again, responder might only have weak
support). If responder has invitational strength, they should jump to the 3
level instead of rebidding their suit at the 2 level.
</li>
<li>
Responder can introduce a new suit on their second bid. Most such bids have an
artificial meaning, but if responder's first bid was 1NT and opener's second bid
was a second suit, then responder's second bid of a third suit is natural.
Responder must have at least 5 cards of that suit (but usually at least 6), and
must not have support for either of their partner's suits.
</li>
</ul>
