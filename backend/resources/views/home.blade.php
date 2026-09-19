@php
    use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Payright Farms - Feed, Processing, Chicken & Egg Sales</title>
  <meta name="description" content="Payright Farms integrates poultry feed sales, chicken processing, chicken sales, and egg sales so customers get the right product at the right price." />
  <meta name="keywords" content="Payright Farms, poultry feed sales, chicken processing, whole chicken, chicken parts, egg sales, poultry farm" />
  <meta name="author" content="Payright Farms" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.payrightfarms.com/" />
  <meta property="og:title" content="Payright Farms - Feed, Processing, Chicken & Egg Sales" />
  <meta property="og:description" content="Four integrated poultry businesses: feed sales, chicken processing, chicken sales, and egg sales." />
  <meta property="og:image" content="{{ asset('assets/logo2.png') }}" />
  <link rel="canonical" href="https://www.payrightfarms.com/" />
  <link rel="icon" href="{{ asset('assets/logo2.png') }}" type="image/png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles.css') }}?v=20" />
</head>
<body>

  <header class="af-header">
    <div class="af-container af-header-inner">
      <div class="af-logo-wrap">
        <img src="{{ asset('assets/logo.png') }}" alt="Payright Farms Logo" style="width: 44px; height: 44px; object-fit: contain; flex-shrink: 0;" />
        <div class="af-logo-text">
          <span class="af-logo-name">Payright Farms</span>
          <span class="af-logo-tagline">Right Product · Right Price · Right Choice</span>
        </div>
      </div>

      <nav class="af-nav">
        <a href="#home">Home</a>
        <a href="#businesses">Businesses</a>
        <a href="#standards">Processing</a>
        <a href="#inventory">Products</a>
        <a href="#about">Mission</a>
        <a href="#contact">Contact</a>
        <a href="#booking" class="af-btn af-btn-sm af-btn-outline" style="margin-left: 0.5rem;">Order Inquiry</a>
      </nav>

      <button class="af-nav-toggle" id="navToggle" aria-label="Toggle navigation">☰</button>
    </div>
  </header>

  <main>
    {{-- ================ HERO ================ --}}
    <section id="home" class="af-hero">

      {{-- Full-bleed poultry farm background image --}}
      <div class="af-hero-bg" aria-hidden="true">
        <img
          src="https://encyclopediaofalabama.org/wp-content/uploads/2023/04/Broiler-Chicken-House-1.jpg"
          alt="Broiler chickens inside a clean poultry house"
          loading="eager"
          decoding="async"
          fetchpriority="high"
          onerror="this.hidden=true"
        />
      </div>

      {{-- Dark gradient overlay --}}
      <div class="af-hero-overlay" aria-hidden="true"></div>

      {{-- Hero content --}}
      <div class="af-hero-inner">
        <div class="af-hero-content">
          <p class="af-kicker">Right Product · Right Price · Right Choice</p>
          <h1>Four connected poultry businesses. One reliable farm choice.</h1>
          <p class="af-lead">
            Payright Farms brings feed sales, chicken processing, chicken sales, and egg sales together so households, kitchens, retailers, and bulk buyers can source with confidence.
          </p>
          <div class="af-hero-actions">
            <a href="#inventory" class="af-btn af-btn-primary">Shop Farm Products</a>
            <a href="#businesses" class="af-btn af-btn-ghost">Explore the 4 Pieces</a>
          </div>

          <div class="af-hero-metrics">
            <div>
              <strong>Feed</strong>
              <span>Breedwell, Olam & Chikun</span>
            </div>
            <div>
              <strong>Processing</strong>
              <span>Clean dressing and portioning</span>
            </div>
            <div>
              <strong>Chicken & Eggs</strong>
              <span>Bulk, retail, whole, and parts</span>
            </div>
          </div>

          <div class="af-floating-note">
            <span>Mission</span>
            <strong>Pay the right price for the right product.</strong>
            <small>That is how we become your right choice.</small>
          </div>
        </div>
        <aside class="af-hero-brand" aria-label="Payright Farms integrated business model">
          <div class="af-hero-logo-card">
            <img src="{{ asset('assets/logo.png') }}" alt="Payright Farms Logo" />
            <div>
              <span>4-piece identity</span>
              <strong>The logo represents our integrated poultry businesses.</strong>
            </div>
          </div>
          <div class="af-jigsaw-grid">
            <div class="af-jigsaw-piece af-piece-feed">
              <span>01</span>
              <strong>Feed Sales</strong>
              <small>Trusted poultry feed brands for every growth stage.</small>
            </div>
            <div class="af-jigsaw-piece af-piece-processing">
              <span>02</span>
              <strong>Chicken Processing</strong>
              <small>Clean slaughter-house workflow and portioning.</small>
            </div>
            <div class="af-jigsaw-piece af-piece-chicken">
              <span>03</span>
              <strong>Chicken Sales</strong>
              <small>Whole chicken, live birds, frozen stock, and parts.</small>
            </div>
            <div class="af-jigsaw-piece af-piece-eggs">
              <span>04</span>
              <strong>Egg Sales</strong>
              <small>Fresh crates for bulk and retail buyers.</small>
            </div>
          </div>
        </aside>
      </div>
    </section>

    {{-- ================ HIGHLIGHTS (4 INTEGRATED BUSINESS PILLARS) ================ --}}
    <section class="af-highlights-section" id="businesses">
      <div class="af-container">
        <div class="af-highlights-grid">
          @php
            $highlights = [
              ['class' => 'af-piece-feed', 'icon' => '01', 'label' => 'Feed Sales', 'sub' => 'Breedwell, Olam & Chikun poultry feeds'],
              ['class' => 'af-piece-processing', 'icon' => '02', 'label' => 'Chicken Processing', 'sub' => 'Clean slaughter-house dressing and portioning'],
              ['class' => 'af-piece-chicken', 'icon' => '03', 'label' => 'Chicken Sales', 'sub' => 'Whole chicken, live birds, frozen stock and parts'],
              ['class' => 'af-piece-eggs', 'icon' => '04', 'label' => 'Egg Sales', 'sub' => 'Fresh crates for bulk and retail buyers'],
            ];
          @endphp
          @foreach($highlights as $h)
            <div class="af-highlight-card {{ $h['class'] }}">
              <span class="af-highlight-icon">{{ $h['icon'] }}</span>
              <div class="af-highlight-info">
                <strong>{{ $h['label'] }}</strong>
                <span>{{ $h['sub'] }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ================ FARM PROCESS ================ --}}
    <section class="af-section af-process-section" id="standards">
      <div class="af-container af-process">
        <div class="af-process-copy">
          <p class="af-kicker">What We Stand For</p>
          <h2>Clean processing, practical standards, and honest farm supply.</h2>
          <p>
            The processing arm of Payright Farms gives buyers more than a price list. It gives them confidence in handling, hygiene, portioning, cold preparation, and communication before products leave the farm.
          </p>
          <div class="af-process-video-card">
            <video
              autoplay
              muted
              loop
              playsinline
              webkit-playsinline
              preload="auto"
              poster="https://res.cloudinary.com/jeoesphr/video/upload/so_0,q_auto,f_jpg,w_800/v1789405318/WhatsApp_Video_2026-09-14_at_17.13.38.jpg"
            >
              <source src="https://res.cloudinary.com/jeoesphr/video/upload/q_auto,f_auto,w_800/v1789405318/WhatsApp_Video_2026-09-14_at_17.13.38.mp4" type="video/mp4" />
              <source src="https://res.cloudinary.com/jeoesphr/video/upload/v1789405318/WhatsApp_Video_2026-09-14_at_17.13.38.mp4" type="video/mp4" />
            </video>
            <div class="af-video-caption">
              <strong>Processing Capacity</strong>
              <span>Organized flow from dressing to packing.</span>
            </div>
          </div>
        </div>
        <div class="af-process-grid">
          <div class="af-process-step">
            <span>Farm Care</span>
            <strong>Healthy birds raised with consistent attention</strong>
            <p>Flocks are monitored for feed, water, ventilation, growth, activity, and general condition before sale or processing.</p>
          </div>
          <div class="af-process-step">
            <span>Clean Processing</span>
            <strong>A controlled slaughter-house workflow</strong>
            <p>Orders move through slaughter, scalding, defeathering, dressing, rinsing, portioning, and packing with clear handling discipline.</p>
          </div>
          <div class="af-process-step">
            <span>Cold Handling</span>
            <strong>Prepared for pickup, delivery, or frozen storage</strong>
            <p>Products are prepared for farm-gate pickup, restaurant use, retail display, frozen storage, or scheduled delivery.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ SUPPLY PROCESS ================ --}}
    <section class="af-section af-supply-section" id="process">
      <div class="af-container">
        <div class="af-section-head">
          <p class="af-kicker">How Orders Move</p>
          <h2>From product choice to pickup or delivery.</h2>
          <p>Simple order handling for buyers who care about clear pricing, available stock, processing notes, and timing.</p>
        </div>
        <div class="af-supply-grid">
          <div class="af-supply-step">
            <span>01</span>
            <strong>Choose the Business Line</strong>
            <p>Select feed, processing, chicken products, or eggs from the live public catalog.</p>
          </div>
          <div class="af-supply-step">
            <span>02</span>
            <strong>Confirm Quantity & Timing</strong>
            <p>We confirm price, availability, pickup or delivery preference, and any processing notes.</p>
          </div>
          <div class="af-supply-step">
            <span>03</span>
            <strong>Prepare the Order</strong>
            <p>Your order is packed or processed, then released for farm-gate pickup or delivery.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ FARM GALLERY ================ --}}
    <section class="af-gallery-section" aria-label="Farm and processing gallery">
      <div class="af-container af-gallery-grid">
        <figure class="af-gallery-main">
          <video
            autoplay
            muted
            loop
            playsinline
            webkit-playsinline
            preload="auto"
            poster="https://res.cloudinary.com/jeoesphr/video/upload/so_0,q_auto,f_jpg,w_600/v1789404062/WhatsApp_Video_2026-09-14_at_17.13.26.jpg"
            class="af-gallery-autoplay"
          >
            <source src="https://res.cloudinary.com/jeoesphr/video/upload/q_auto,f_auto,w_600/v1789404062/WhatsApp_Video_2026-09-14_at_17.13.26.mp4" type="video/mp4" />
            <source src="https://res.cloudinary.com/jeoesphr/video/upload/v1789404062/WhatsApp_Video_2026-09-14_at_17.13.26.mp4" type="video/mp4" />
          </video>
          <figcaption>
            <strong>Clean Processing</strong>
            <span>Careful poultry handling from preparation to dispatch.</span>
          </figcaption>
        </figure>
        <figure>
          <img
            src="https://www.iam.gov.mo/foodsafety/file?p=foodsafetyinfo%2FList21%2F121_08b8ce6846a035635fe30b358265d6e2.jpg"
            alt="Fresh chicken trays being sealed by gloved food-handling staff"
            loading="lazy"
            decoding="async"
            onerror="this.hidden=true"
          />
          <figcaption>
            <strong>Prepared for Sale</strong>
            <span>Clean handling for retail and kitchen use.</span>
          </figcaption>
        </figure>
      </div>
    </section>


    {{-- ================ FEATURED STOCK ================ --}}
    <section class="af-section" id="featured">
      <div class="af-container">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem; flex-wrap:wrap; gap:1rem;">
          <div>
            <p class="af-kicker">Featured Farm Products</p>
            <h2 style="font-size:2rem; margin:0;">Fast-moving items from the farm catalog</h2>
          </div>
          <a href="#inventory" class="af-btn af-btn-ghost af-btn-sm">View Full Product List</a>
        </div>

        <div class="af-product-grid af-featured-grid" id="featuredGrid">
              @forelse ($featured as $item)
                @php
                  $isSoldOut = $item->is_sold_out || $item->stock === 0;
                  $stockUnit = trim((string) $item->stock_unit);
                  $stockLabel = $item->stock === null
                    ? 'In Stock'
                    : ($stockUnit !== ''
                      ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' available'
                      : $item->stock.' available');
                @endphp
                <article
                  class="af-product-card"
                  data-menu-item
                  data-item-id="{{ $item->id }}"
                  data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                  data-stock="{{ $item->stock ?? '' }}"
                  data-stock-unit="{{ $item->stock_unit ?? '' }}"
                  data-category="{{ Str::slug(optional($item->category)->name ?? 'general') }}"
                >
                  <div class="af-product-media">
                      @if($item->image_url)
                        <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                      @else
                        <img src="https://images.unsplash.com/photo-1582721478779-0ae163c05a60?q=80&w=900&auto=format&fit=crop" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                      @endif
                    <span class="af-spec-badge">{{ optional($item->category)->name ?? 'General' }}</span>
                  </div>
                  <div class="af-product-body">
                    <h3>{{ $item->name }}</h3>
                    <p class="af-spec-text">{{ Str::limit($item->description, 105) }}</p>
                    <div class="af-product-meta">
                    @if($isSoldOut)
                      <span class="af-stock-pill af-stock-pill-empty">Out of Stock</span>
                    @else
                      <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                    @endif
                    <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                    </div>
                    <button
                      class="af-btn af-btn-primary"
                      data-item="{{ $item->name }}"
                      data-item-id="{{ $item->id }}"
                      data-item-price="{{ $item->price }}"
                      data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                      data-stock="{{ $item->stock ?? '' }}"
                      data-stock-unit="{{ $item->stock_unit ?? '' }}"
                      @if($isSoldOut) disabled @endif
                    >
                      {{ $isSoldOut ? 'Out of Stock' : 'Add to Inquiry' }}
                    </button>
                  </div>
                </article>
              @empty
                <p class="af-empty-state">No featured products at this time.</p>
              @endforelse
        </div>
      </div>
    </section>

    {{-- ================ FULL PRODUCT CATALOG ================ --}}
    <section class="af-section af-section-alt" id="inventory">
      <div class="af-container">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem; flex-wrap:wrap; gap:1rem;">
          <div>
            <p class="af-kicker">Farm Catalog</p>
            <h2 style="font-size:2rem; margin:0;">Choose from our four integrated businesses</h2>
            <p style="margin-top:0.5rem; margin-bottom:0;">Feed, processed chicken, whole chicken and parts, and fresh eggs with live availability from the backend.</p>
          </div>
        </div>

        <div class="af-menu-panel">
          <div class="af-menu-filters" id="menuFilters">
            <button class="af-chip af-chip-active" data-filter="all">All Categories</button>
            @foreach ($categories as $category)
              <button class="af-chip" data-filter="{{ Str::slug($category->name) }}">{{ $category->name }}</button>
            @endforeach
          </div>

          <div class="af-product-grid af-catalog-grid" id="menuGrid">
                @forelse ($menuItems as $item)
                  @php
                    $catSlug = Str::slug(optional($item->category)->name ?? 'general');
                    $isSoldOut = $item->is_sold_out || $item->stock === 0;
                    $stockUnit = trim((string) $item->stock_unit);
                    $stockLabel = $item->stock === null
                      ? 'In Stock'
                      : ($stockUnit !== ''
                        ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' available'
                        : $item->stock.' available');
                  @endphp
                  <article
                    class="af-product-card af-menu-item"
                    data-menu-item
                    data-item-id="{{ $item->id }}"
                    data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                    data-stock="{{ $item->stock ?? '' }}"
                    data-stock-unit="{{ $item->stock_unit ?? '' }}"
                    data-category="{{ $catSlug }}"
                  >
                    <div class="af-product-media">
                        @if($item->image_url)
                          <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                        @else
                          <img src="https://images.unsplash.com/photo-1582721478779-0ae163c05a60?q=80&w=900&auto=format&fit=crop" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                        @endif
                      <span class="af-spec-badge">{{ optional($item->category)->name ?? 'General' }}</span>
                    </div>
                    <div class="af-product-body">
                      <h3>{{ $item->name }}</h3>
                      <p class="af-spec-text">{{ Str::limit($item->description, 105) }}</p>
                      <div class="af-product-meta">
                      @if($isSoldOut)
                        <span class="af-stock-pill af-stock-pill-empty" data-stock-pill>Out of Stock</span>
                      @else
                        <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                      @endif
                      <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                      </div>
                      <button
                        class="af-btn af-btn-outline"
                        data-item="{{ $item->name }}"
                        data-item-id="{{ $item->id }}"
                        data-item-price="{{ $item->price }}"
                        data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                        data-stock="{{ $item->stock ?? '' }}"
                        data-stock-unit="{{ $item->stock_unit ?? '' }}"
                        @if($isSoldOut) disabled @endif
                      >
                        {{ $isSoldOut ? 'Out of Stock' : 'Add to Inquiry' }}
                      </button>
                    </div>
                  </article>
                @empty
                  <p class="af-empty-state">No inventory available at this time.</p>
                @endforelse
          </div>
        </div>
      </div>
    </section>

    {{-- ================ BOOKING PROMPT ================ --}}
    <section class="af-section" id="booking">
      <div class="af-container af-order-placeholder">
        <div class="af-order-prompt">
          <p class="af-kicker">Booking Sheet</p>
          <h2>Build your order inquiry from the farm catalog.</h2>
          <p style="max-width:560px; margin:0 auto 2rem;">Add products from any of the four business lines, then send your quantity, pickup or delivery choice, preferred date, and processing notes.</p>
          <div class="af-order-checks" aria-label="Inquiry details">
            <span>Feed brand</span>
            <span>Quantity</span>
            <span>Pickup or delivery</span>
            <span>Fresh or frozen</span>
          </div>
          <button class="af-btn af-btn-primary" type="button" id="orderPromptBtn" style="min-width: 220px;">Open Booking Sheet</button>
        </div>
      </div>
    </section>

    {{-- ================ ABOUT ================ --}}
    <section class="af-section af-section-alt" id="about">
      <div class="af-container af-about">
        <div class="af-about-copy">
          <div class="af-about-header">
            <p class="af-kicker">About Payright Farms</p>
            <span class="af-about-badge">Guided by grace</span>
          </div>
          <h2>Right Product, Right Price, Right Choice.</h2>
          <p>
            Payright Farms is built around four integrated poultry businesses: feed sales, chicken processing, chicken sales, and egg sales. The idea is simple: customers should not have to guess where to get dependable poultry products at fair value.
          </p>
          <div class="af-mission-card">
            <p>"To ensure our loyal customers always pay the right price for the right product and henceforth make us their right choice."</p>
          </div>
          <p>
            Our mission is to ensure our loyal customers always pay the right price for the right product and henceforth make us their right choice. That mission guides the way we communicate prices, prepare orders, process chicken, and serve bulk and retail buyers.
          </p>
          <div class="af-about-pills">
            <span>Feed Sales</span>
            <span>Chicken Processing</span>
            <span>Chicken Sales</span>
            <span>Egg Sales</span>
          </div>
          <div class="af-about-signoff">
            <span class="af-script">With gratitude,</span>
            <strong>Team Payright Farms</strong>
          </div>
        </div>
        <div class="af-about-panel">
          <div class="af-about-image">
            <img
              src="https://madar-export.com/storage/attachments/dsc-0844-1qwpt5uu-66f85df36bd8b.jpg"
              alt="Clean automated poultry processing facility with rails and stainless steel equipment"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
          </div>
          <div class="af-about-card">
            <span class="af-about-pill">Our Operating Standards</span>
            <p>The four-piece logo is not decoration. It is the operating model of the farm.</p>
            <ul class="af-about-checklist">
              <li>Feed sales support healthy poultry growth and predictable production.</li>
              <li>Chicken processing turns live supply into clean, ready-to-use products.</li>
              <li>Chicken sales cover whole chicken, live birds, parts, and frozen supply.</li>
              <li>Egg sales serve both bulk and retail customers.</li>
              <li>Every arm supports the motto: Right Product, Right Price, Right Choice.</li>
            </ul>
          </div>
          <div class="af-about-stats">
            <div>
              <strong>4</strong>
              <span>Integrated businesses</span>
            </div>
            <div>
              <strong>Bulk</strong>
              <span>Wholesale supply</span>
            </div>
            <div>
              <strong>Retail</strong>
              <span>Daily buyers</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ BUYER GUIDE ================ --}}
    <section class="af-section af-buyer-section">
      <div class="af-container">
        <div class="af-buyer-head">
          <p class="af-kicker">Buyer Guide</p>
          <h2>Choose the product line that fits your household, kitchen, or business.</h2>
        </div>
        <div class="af-buyer-grid">
          <div class="af-buyer-card">
            <img
              src="https://encyclopediaofalabama.org/wp-content/uploads/2023/04/Broiler-Chicken-House-1.jpg"
              alt="Broiler chickens in a commercial poultry house"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Chicken Sales</strong>
            <p>Whole chicken, parts, live birds, fresh supply, and frozen options for retail and bulk buyers.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://www.poultryworld.net/app/uploads/2021/04/001_328_IMG_gro408851-023.jpg"
              alt="Automated poultry processing line carrying dressed chickens"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Chicken Processing</strong>
            <p>Clean slaughter-house handling, dressing, portioning, and preparation for food businesses.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://meglepetes.hu/uploads/2026/06/baromfi-1-1284x742.jpeg"
              alt="Chicken parts arranged in trays on a packaging conveyor"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Feed Sales</strong>
            <p>Breedwell, Olam, and Chikun feed options for broilers, layers, growers, and starters.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://www.irishtimes.com/resizer/v2/FLIYLTSF3JTNOYFI3PWMG2PSLA.jpg?auth=31f2e5b04966da09172ed22b5cc1b1b916270fa1017e06f515a366bb90fb879c&height=900&smart=true&width=1600"
              alt="Large chilled poultry processing hall with conveyors and packed products"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Egg Sales</strong>
            <p>Fresh eggs in crates for households, stores, restaurants, and bulk retail orders.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ CONTACT ================ --}}
    <section class="af-section" id="contact">
      <div class="af-container af-contact">
        <div class="af-contact-card">
          <p class="af-kicker">Get in Touch</p>
          <h2>Procurement & Distribution Inquiries</h2>
          <p>Contact us directly for feed pricing, chicken processing, whole chicken and parts, eggs, volume orders, or supply contracts.</p>
          <div class="af-contact-grid">
            <div>
              <strong>Phone / WhatsApp</strong>
              <p><a href="tel:08023135085" style="color:var(--af-green-dark);">+234 802 313 5085</a></p>
            </div>
            <div>
              <strong>Email</strong>
              <p><a href="mailto:support@payrightfarms.com" style="color:var(--af-green-dark);">support@payrightfarms.com</a></p>
            </div>
            <div>
              <strong>Farm Location</strong>
              <p>SARS Road, immediately after the SARS Police Station (Smart Home Office building).</p>
            </div>
            <div>
              <strong>Operating Hours</strong>
              <p><span data-business-hours-weekday>Mon. - Sat.: 8am - 10pm</span><br /><span data-business-hours-sunday>Sun.: 12noon - 10pm</span></p>
            </div>
          </div>
        </div>
        <div class="af-contact-cta">
          <h3>Follow the Farm</h3>
          <p>Stay updated on flock availability, processing schedules, and price adjustments.</p>
          <div class="af-socials" aria-label="Social media links">
            <a class="af-social-link" href="#" aria-label="Follow on Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                <circle cx="12" cy="12" r="4"></circle>
                <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none"></circle>
              </svg>
            </a>
            <a class="af-social-link" href="#" aria-label="Follow on TikTok">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M16.75 3c.34 2.16 1.58 3.54 3.75 3.75v3.21a7.12 7.12 0 0 1-3.75-1.1v5.95c0 3.15-2.12 5.19-5.23 5.19-2.88 0-5.02-2.02-5.02-4.72 0-2.83 2.22-4.81 5.32-4.81.29 0 .56.02.82.06v3.31a3.2 3.2 0 0 0-.82-.11c-1.17 0-1.93.6-1.93 1.55 0 .9.7 1.52 1.68 1.52 1.1 0 1.82-.67 1.82-2.01V3h3.36Z"></path>
              </svg>
            </a>
          </div>
          <a href="#booking" class="af-btn af-btn-primary">Submit Supply Inquiry</a>
        </div>
      </div>
    </section>
  </main>

  {{-- ================ BOOKING FAB ================ --}}
  <button class="af-cart-fab" id="cartFab" type="button" aria-label="Open booking sheet">
    <span>Booking Sheet</span>
    <span class="af-cart-fab-count" id="cartCount">0</span>
  </button>

  {{-- ================ BOOKING SHEET DRAWER ================ --}}
  <div class="af-cart-overlay" id="cartOverlay" aria-hidden="true">
    <div class="af-cart-overlay-backdrop" id="cartOverlayBackdrop"></div>
    <div class="af-cart-overlay-card">
      <button class="af-cart-overlay-close" id="cartOverlayClose" aria-label="Close booking sheet">×</button>
      <div class="af-cart-overlay-head">
        <p class="af-kicker">Procurement</p>
        <h3>Your Booking Sheet</h3>
        <p style="margin:0; font-size:0.9rem;">Review selected products, then submit your inquiry via WhatsApp.</p>
      </div>
      <div class="af-cart-overlay-body">
        <div class="af-cart-overlay-list">
          <ul id="cartListOverlay" class="af-cart-list"></ul>
          <div class="af-cart-summary">
            <span>Estimated Total</span>
            <strong id="cartTotalOverlay">₦0</strong>
          </div>
        </div>
        <div class="af-cart-overlay-form">
          <form id="checkoutFormOverlay">
            <label>
              Business / Contact Name
              <input type="text" name="name" required placeholder="e.g. John's Frozen Foods Ltd" />
            </label>
            <label>
              Phone Number
              <input type="tel" name="phone" required placeholder="+234 800 000 0000" />
            </label>
            <label>
              Fulfillment Option
              <select name="service" required>
                <option value="Farm Gate Pickup">Farm Gate Pickup</option>
                <option value="Refrigerated Delivery">Refrigerated Delivery</option>
                <option value="Wholesale Contract">Wholesale Contract Inquiry</option>
              </select>
            </label>
            <label>
              Preferred Collection / Delivery Date
              <input type="text" name="time" placeholder="e.g. Wednesday morning" required />
            </label>
            <label>
              Additional Notes
              <textarea name="note" rows="2" placeholder="e.g. Custom cuts required, volume pricing, etc."></textarea>
            </label>
            <div class="af-payment-options">
              <button
                type="button"
                class="af-btn af-btn-primary"
                id="whatsappBtnOverlay"
                data-whatsapp-btn
                data-form="checkoutFormOverlay"
              >
                Submit Inquiry via WhatsApp
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="af-footer">
    <div class="af-container">
      <div class="af-footer-brand">
        <div style="display:flex; align-items:center; justify-content:center; gap:0.85rem; margin-bottom:1rem;">
          <img src="{{ asset('assets/logo.png') }}" alt="Payright Farms Logo" style="width: 48px; height: 48px; object-fit: contain; flex-shrink: 0;" />
          <div style="text-align:left;">
            <div style="font-size:1.2rem; font-weight:800; color:#ffffff; letter-spacing:-0.02em;">Payright Farms</div>
            <div style="font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:rgba(255,255,255,0.6);">Right Product · Right Price · Right Choice</div>
          </div>
        </div>
        <p class="af-footer-mission">
          "To ensure our loyal customers always pay the right price for the right product and henceforth make us their right choice."
        </p>
      </div>
      <div class="af-footer-bottom">
        <span>© <span id="year"></span> Payright Farms · Right Product · Right Price · Right Choice</span>
      </div>
    </div>
  </footer>

  <script src="{{ asset('script.js') }}?v=40" defer></script>
</body>
</html>
