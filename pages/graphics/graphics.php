<div id="graphics-panel">
    <div class="subnav-container container">
        <h2 class="page-title">Graphic Design</h2>
        <ul class="subnav">
            <li>
                <button class="subnav-btn active" id="albums" onclick="updateGraphicSection(this.id);">Album Artwork</button>
            </li>
            <li>
                <button class="subnav-btn" id="tees" onclick="updateGraphicSection(this.id);">Tee Shirt Designs</button>
            </li>
            <li>
                <button class="subnav-btn" id="print" onclick="updateGraphicSection(this.id);">Print</button>
            </li>
            <li>
                <button class="subnav-btn" id="news" onclick="updateGraphicSection(this.id);">Newsletters</button>
            </li>
            <li>
                <button class="subnav-btn" id="logos" onclick="updateGraphicSection(this.id);">Logos</button>
            </li>
            <li>
                <button class="subnav-btn" id="adverts" onclick="updateGraphicSection(this.id);">Advertisements</button>
            </li>
        </ul>
    </div>
    <section id="albums-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Album Artwork</h3>
        </div>
        <div class="content-frame-container container">
            <div class="album-group">
                <?php include('albums/alucard/alucard-cd.php'); ?>
            </div>
            <div class="album-group vinyl">
                <?php include('albums/andrew-loehr/andrew-loehr-vinyl.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/royden/royden-cd.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/elephantom/elephantom-cd.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/eight-minutes/eight-minutes-cd.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/asecondtoolate/asecondtoolate-cd.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/woodward/woodward-cd.php'); ?>
            </div>
            <div class="album-group">
                <?php include('albums/elle/elle-cd.php'); ?>
            </div>
            <div class="album-group cassette">
                <?php include('albums/weakend/weakend-hereavv-tape.php'); ?>
            </div>
            <div class="album-group cassette">
                <?php include('albums/weakend/weakend-tornado-days-tape.php'); ?>
            </div>
        </div>
        <div class="album-hires-wrap">
            <span class="expand-close">+</span>
        </div>
    </section>
    <section id="tees-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Tee Shirt Designs</h3>
        </div>
        <div class="container">
            <?php include('tees/tees.php'); ?>
        </div>
    </section>
    <section id="print-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Print Designs</h3>
            <p>Coming soon.</p>
        </div>
    </section>
    <section id="news-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Newsletter Designs</h3>
            <p>Coming soon.</p>
        </div>
    </section>
    <section id="logos-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Logo Designs</h3>
            <p>Coming soon.</p>
        </div>
    </section>
    <section id="adverts-content" class="graphic-section">
        <div class="container">
            <h3 class="section-heading">Advertisements Designs</h3>
            <p>Coming soon.</p>
        </div>
    </section>
</div>

<script>
	// SubNav Stuffs
	function updateGraphicSection(section) {
		let subnavBtnId    = section,
            subnavBtn      = $('#' + subnavBtnId),
			contentSection = $('#' + subnavBtnId + '-content');

		if (subnavBtn.hasClass('active')) {
			return null;
        } else {
			$('.graphic-section').hide();
			$('.subnav-btn').removeClass('active');

			subnavBtn.addClass('active');
			contentSection.addClass('active').show();
		}
	}
</script>
<script src="/pages/graphics/graphics.js"></script>
