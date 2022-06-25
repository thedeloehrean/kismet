<div class="tee-wrap">
	<div class="single-tee">
		<img src="/pages/graphics/tees/a-sundial-map-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/alucard-black-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/alucard-red-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/cinematic-sunrise-rollercoaster-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/cinematic-sunrise-sun-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/cinematic-sunrise-tigers-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/eight-seconds-upside-down-car-gauges-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/fine-line-dog-thrift-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/fine-line-gun-girl-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/fine-line-swirl-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/hotness-fairy-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/night-away-words-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/poppy-pints-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/rosesdead-bloody-hands-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/rosesdead-building-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/royden-buildings-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/royden-metal-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/royden-spike-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/showcase-suicide-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/skin-thread-skull-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/skin-thread-tv-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/skin-thread-unicycle-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/stop-the-revolution-trex-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/team-goldie-boombox-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-archer-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-bronto-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-bttf-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-burning-house-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-butterflies-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-circle-girl-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-cowboy-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-griffins-mess-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-gun-dismantle-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-ribcage-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-swirled-splotches-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-voltron-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/weakend-zombies-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/whiv-lion-tee.png" />
	</div>
	<div class="single-tee">
		<img src="/pages/graphics/tees/whiv-robot-tee.png" />
	</div>
</div>

<script>
	$(function () {
		let teeWrap = $(".tee-wrap");
		let tees = teeWrap.children();
		while (tees.length) {
			teeWrap.append(tees.splice(Math.floor(Math.random() * tees.length), 1)[0]);
		}

		$('.single-tee').each(function() {
			//preset possible transforms
			let transforms = [
				"rotateNone",
                "rotateLeftLess",
                "rotateRightLess",
                "rotateLeft",
                "rotateRight",
                "rotateLeftMore",
                "rotateRightMore"
            ];

			//choose a random number from the array
			let rand = Math.floor(Math.random()*transforms.length);
			//grabs each of the list items
			$(this).addClass(transforms[rand]);
		});
	});
</script>