<h2>Quantitative responses to 1NT</h2>
<p>
A <em>quantitative response</em> to a 1NT opening bid is one whose purpose is to
show how much strength you have. Such a bid either sets the final contract or
invites opener to set the final contract.
</p>
<h3>Direct raise to 3NT</h3>
<p>
This is the most common and simplest of all quantitative responses. After your
partner has opened 1NT (15&ndash;17, which you should not forget to announce),
if you have anywhere from 10 to 14 points, then you know that both hands
together have enough for game, but not enough for slam. And we previously
discussed the Jacoby transfer, which should be your go-to bid if you have 5+ of
a major, and Stayman, if you have 4 of a major (but not 5). But if neither of
those bids is applicable, then it is clear what the final contract should be.
You do not have a major suit fit, but you know that you must be in game. Bid
3NT.
</p>
<p>
That is, the following auction:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '3N', 'P', 'P', 'P', '', ''))?>
</span>
could occur if East has any of the following hands:
<span style="display:block">
<?=csh('K87', 'A9', '862', 'A9875')?>
<?=csh('A64', 'KT9', 'KT973', '86')?>
<?=csh('KQ7', 'A62', '984', 'KJ98')?>
</span>
</p>
<p>
Note, however, that if responder has 15+ HCP, responder should consider inviting
to slam. We will discuss how to do so below.
</p>
<h3>Invite to 3NT</h3>
<p>
We discussed how an invitational hand could be shown by responder's rebid after
responder's first bid of Stayman (2C) or a Jacoby transfer (2D or 2H). If
responder has an invitational hand but has 3&minus; cards in both majors, then
responder needs some way to invite opener to game, <i>i.e.</i>, a bid that
instructs opener to bid 3NT if opener is at the top of their range (a good 16 to
17 points). The natural way to make such an invitation would be to bid 2NT,
which opener could then raise to 3NT if they are at the top of their range (and,
otherwise, pass, leaving 2NT as the final contract). However, most advanced
partnerships don't actually use 2NT as a quantitative invitation to 3NT,
instead giving it an artificial meaning, which we won't discuss in this
section. Many partnerships instead use the <q>2S range ask</q> convention: after
opener has bid 1NT, responder bids 2S to ask opener about their strength. (This
2S bid must be alerted because it is artificial; it does not mean that the
responder has spades.) Then, opener bids 2NT with a minimum, or 3C with a
maximum.
</p>
<p>
For example, if opener holds <?=rsh('9632', 'AK54', 'A2', 'KJ9')?> and responder
holds <?=rsh('KQ7', 'A94', 'T842', '854')?>, a possible auction is shown below:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2S', 'P',
                 '2N', 'P', 'P', 'P'))?>
</span>
In the above auction, opener has a minimum 1NT hand. Responder has 9 points, and
thus wants to invite (but not force) to game. Responder bids 2S, range ask,
which opener alerts. Because West's hand is a minimum, West's response to the
range ask is 2NT. East, seeing that there is no game, passes, leaving 2NT as the
final contract. If opener's hand had been a maximum, the auction would have gone
like this:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2S', 'P',
                 '3C', 'P', '3N', 'P',
                 'P', 'P', '', ''))?>
</span>
In this case, the 3C bid shows a maximum. When East sees that West has a
maximum, East knows that the pair belongs in game, so East bids 3NT and West
passes. The reason why the 3C bid is used to show a maximum will be explained in
a later section.
</p>
<h3>Direct raise to 6NT</h3>
<p>
A 6NT contract typically requires about 32 combined HCP. Therefore, after a 1NT
opening showing 15&ndash;17 HCP, if responder has 17&ndash;18 HCP, a direct
raise to 6NT is justified. However, responder should only directly raise to 6NT
when Stayman and Jacoby transfers are not applicable, because it is important to
evaluate whether a suit slam is possible before settling on a notrump slam.
Note that if responder has 19+ HCP, they should consider inviting to 7NT.
</p>
<h3>Direct raise to 7NT</h3>
<p>
A 7NT contract typically requires about 36 combined HCP. Therefore, after a 1NT
opening showing 15&ndash;17 HCP, if responder has 21+ HCP, a direct raise to 7NT
is justified.
</p>
<h3>Invitation to 6NT</h3>
<p>
After a 1NT opening, a response of 4NT is an invitation to 6NT. So, assuming
that the 1NT opening shows 15&ndash;17 points, a response of 4NT should
typically be made with around 15&ndash;16 HCP when responder has a hand for
which Stayman and Jacoby transfers are not applicable. With a maximum, opener
should accept the invitation by bidding 6NT. With a minimum, opener should
decline the invitation by passing.
</p>
<h3>Invitation to 7NT</h3>
<p>
After a 1NT opening, a response of 5NT is an invitation to 7NT. So, assuming
that the 1NT opening shows 15&ndash;17 points, a response of 5NT should
typically be made with around 19&ndash;20 points when responder has a hand for
which Stayman and Jacoby transfers are not applicable. With a maximum, opener
should accept the invitation by bidding 7NT. With a minimum, opener should
decline the invitation by bidding 6NT. Opener should not pass, because even
when opener has a minimum, the partnership still has 34+ HCP, which is enough
to make 6NT.
</p>
<h3>Quantitative bids following Jacoby transfers</h3>
<p>
For responder, showing a 5-card major always takes precedence over showing
strength. A responder should always bid a Jacoby transfer before they consider
making a 4NT, 5NT, or 6NT bid, because if a suit fit is found, it might be
possible to make a slam that would not be possible in notrump. After opener has
accepted the Jacoby transfer, <em>then</em> responder can make a quantitative
bid. For example:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2D', 'P',
                 '2H', 'P', '4N', 'P',
                 '?', '', '', ''))?>
</span>
In the above auction, responder's 2D bid is a Jacoby transfer showing 5+ hearts.
Opener bids 2H as required. Responder's second bid, 4NT, should be interpreted
as a quantitative bid showing 15&ndash;16 HCP. Opener now knows that responder
has both 5 hearts and 15&ndash;16 HCP. Opener first evaluates whether or not a
fit has been found in hearts (which will be the case when opener has 3+ hearts).
If no fit exists in hearts, opener can choose to accept or decline the
invitation as usual (<i>i.e.</i> by bidding 6NT or passing). If a fit does exist
in hearts, opener can accept the invitation by bidding 6H or decline by bidding
5H.
</p>
<h3>Quantitative bids following Stayman</h3>
<p>
Similarly, a responder should employ Stayman before making a quantitative bid.
The exception is when responder has a 4333 distribution, in which case the hand
is usually better played in notrump and responder can pretend they don't have a
4-card major. For example:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2C', 'P',
                 '2D', 'P', '6N', 'P',
                 '?', '', '', ''))?>
</span>
In the above auction, 2C is Stayman, asking for a 4-card major. Responder has
bid 2C instead of going directly to 6NT, because if a major fit is found, then
there is a chance of being able to bid a grand slam instead of 6NT. But opener
rebids 2D, denying any 4-card major. Responder, holding 17&ndash;18 HCP,
therefore sets 6NT as the final contract.
</p>
<p>
Next, consider what happens if opener showed a 4-card major:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2C', 'P',
                 '2H', 'P', '5N', 'P',
                 '?', '', '', ''))?>
</span>
In the auction above, opener rebid 2H to show 4+ hearts. But that's not what
responder wanted to hear. So responder gives up on the prospect of a major suit
contract, and their second bid simply shows their strength, 19&ndash;20 HCP, and
invites opener to a grand slam. Opener can accept by bidding 7NT or decline by
bidding 6NT. It's also possible that opener has 4 spades as well. In that case,
because opener knows that responder's suit was spades, opener could rebid 6S, or
7S if opener believes that 7S is makeable.
</p>
<p>
If opener bids a 4-card major and that happens to be the 4-card major that
responder has, then responder should make an artificial forcing bid in the other
major at the 3 level to indicate major suit agreement prior to making any
quantitative bid:
<span class="auctionContainer">
<?=auction(array('1N', 'P', '2C', 'P',
                 '2H', 'P', '3S', 'P',
                 '?', '', '', ''))?>
</span>
In the auction above, East's bid of 3S is an artificial bid showing that East's
4-card major is hearts and a major suit fit has been found. This is called the
Baze convention. Because a fit has been found, the partnership may be able to
make a heart slam even if they don't have enough raw strength for a notrump
slam, so the subsequent bidding will generally not be quantitative. We will
discuss major suit slam bidding in a later section.
</p>
<h3>Summary of this section</h3>
<ul>
<li>
When a player has opened 1NT, their partner should bid Stayman or a Jacoby
transfer if possible. If responder does not have an appropriate hand for Stayman
or a Jacoby transfer, responder can raise to game or slam, or invite partner to
game or slam.
</li>
<li>
With 8&ndash;9 HCP, responder can invite to game by bidding 2S (which must be
alerted). Opener bids 2NT with a minimum. With a maximum, opener bids 3C, and
responder corrects to 3NT.
</li>
<li>
With 10&ndash;14 HCP, responder can directly raise to 3NT, to play.
</li>
<li>
With 15&ndash;16 HCP, responder can bid 4NT, which is an invitation to 6NT.
Opener can accept the invitation by bidding 6NT, or decline by passing.
</li>
<li>
With 17&ndash;18 HCP, responder can directly raise to 6NT.
</li>
<li>
With 19&ndash;20 HCP, responder can bid 5NT, which is an invitation to 7NT.
Opener can accept the invitation by bidding 7NT, or decline by bidding 6NT
(<em>not</em> by passing).
</li>
<li>
With 21+ HCP, responder can directly raise to 7NT.
</li>
<li>
If responder starts by bidding a Jacoby transfer, then they can make a
quantitative notrump bid after partner has accepted the transfer. Opener has the
option of correcting from notrump to responder's major, if a fit exists.
</li>
<li>
If responder starts by bidding Stayman, then they can make a quantitative
notrump bid after partner has denied a 4-card major or after partner has shown
the major other than the one responder holds.
</li>
</ul>
