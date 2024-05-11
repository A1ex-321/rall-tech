@include('tech.layout.header')
<style>
  /* Hide full description by default */
  .desktop-description {
    display: none;
  }
  /* Show full description for desktop view */
  @media (min-width: 768px) {
    .desktop-description {
      display: block;
    }
    /* Hide truncated description for desktop view */
    .mobile-description {
      display: none;
    }
  }
</style>

<section class="breadcrumbs-section bg_cover" style="background-color: rgb(111, 113, 143);">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="breadcrumbs-content">
          <h1>Events & Achievements</h1>
          <ul class="link">
            <li><a>Home</a></li>
            <li class="active">Events & Achievements</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section><!--====== End breadcrumbs-section ======-->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
      <!-- Your sidebar content goes here if you have any -->
    </div>
    <div class="col-lg-10">
      <div class="col-lg-12">
        <div class="sidebar-widget-area">
          <div class="widget widget-recent-post mb-10">
            <h4 class="widget-title">Recent Posts</h4>
            <ul class="recent-post-widget">
              @foreach($getRecord as $index => $record1)
                <li class="post-thumbnail-content" style="height:300px;">
                  @if($index % 2 == 0)
                    <a href="{{ route('singleevent', ['id' => $record1->id]) }}">
                      <img src="{{ asset('public/images/' . $record1->image) }}" class="img-fluid" alt="{{ $record1->title }}" style="width:400px;height:250px;">
                    </a>
                  @endif
                  <div class="post-title-date" style="width:100%;">
                    <h6><a href="{{ route('singleevent', ['id' => $record1->id]) }}">{{ $record1->title }}</a></h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $record1->tech }}</h6>
                    <span class="posted-on"><i class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($record1->created_at)->format('F j, Y') }}</span>
                    <!-- PHP code to truncate the description to 5 words for mobile view -->
                    <?php
                      $descriptionWords = explode(' ', $record1->description);
                      $truncatedDescription = implode(' ', array_slice($descriptionWords, 0, 5));
                    ?>
                    <!-- Show truncated description for mobile view -->
                    <p class="mobile-description">{{ $truncatedDescription }}</p>
                    <!-- Show full description for desktop view -->
                    <p class="desktop-description">{{ $record1->description }}</p>
                  </div>
                  @if($index % 2 != 0)
                    <a href="{{ route('singleevent', ['id' => $record1->id]) }}">
                      <img src="{{ asset('public/images/' . $record1->image) }}" class="img-fluid" alt="{{ $record1->title }}" style="width:400px;height:250px;">
                    </a>
                  @endif
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@include('tech.layout.footer')