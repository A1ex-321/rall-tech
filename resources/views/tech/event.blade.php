@include('tech.layout.header')
<style>
      * {
  box-sizing: border-box;
}





.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(#000, .1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;

  z-index: 0;
  a {
    color: inherit;
    &:hover {
      color: #5ad67d;
    }
  }
  &:hover {
    .photo {
      transform: scale(1.3);
    }
  }
  .meta {
    position: relative;
    z-index: 0;
    height: 200px;
  }
  .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    transition: transform .2s;
  }
  .details,
  .details ul {
    margin: auto;
    padding: 0;
    list-style: none;
  }

  .details {
    position: absolute;
    top: 0;
    bottom: 0;
    left: -100%;
    margin: auto;
    transition: left .2s;
    background: rgba(#000, .6);
    color: #fff;
    padding: 10px;
    width: 100%;
    font-size: .9rem;
    a {
      text-decoration: dotted underline
    }
    ul li {
      display: inline-block;
    }
    .author:before {
      font-family: FontAwesome;
      margin-right: 10px;
      content: "\f007";
    }

    .date:before {
      font-family: FontAwesome;
      margin-right: 10px;
      content: "\f133";
    }

    .tags {
      ul:before {
        font-family: FontAwesome;
        content: "\f02b";
        margin-right: 10px;
      }
      li {
        margin-right: 2px;
        &:first-child {
          margin-left: -4px;
        }
      }
    }
  }
  .description {
    padding: 1rem;
    background:#fff;
    position: relative;
    z-index: 1;
    h1,
    h2 {
      font-family: Poppins, sans-serif;
    }
    h1 {
      line-height: 1;
      margin: 0;
      font-size: 1.7rem;
    }
    h2 {
      font-size: 1rem;
      font-weight: 300;
      text-transform: uppercase;
      color: #a2a2a2;
      margin-top: 5px;
    }
    .read-more {
      text-align: right;
      a {
        color: #5ad67d;
        display: inline-block;
        position: relative;
        &:after {
          content: "\f061";
          font-family: FontAwesome;
          margin-left: -10px;
          opacity: 0;
          vertical-align: middle;
          transition: margin .3s, opacity .3s;
        }

        &:hover:after {
          margin-left: 5px;
          opacity: 1;
        }
      }
    }
  }
  p {
    position: relative;
    margin: 1rem 0 0;
    &:first-of-type {
      margin-top: 1.25rem;
      &:before {
        content: "";
        position: absolute;
        height: 5px;
        background: #5ad67d;
        width: 35px;
        top: -0.75rem;
        border-radius: 3px;
      }
    }
  }
  &:hover {
    .details {
      left: 0%;
    }
  }


  @media (min-width: 640px) {
    flex-direction: row;
    max-width: 900px;
    .meta {
      flex-basis: 40%;
      height: auto;
    }
    .description {
      flex-basis: 60%;
      &:before {
        transform: skewX(-3deg);
        content: "";
        background: #fff;
        width: 30px;
        position: absolute;
        left: -10px;
        top: 0;
        bottom: 0;
        z-index: -1;
      }
    }
    &.alt {
      flex-direction: row-reverse;
      .description {
        &:before {
          left: inherit;
          right: -10px;
          transform: skew(3deg)
        }
      }
      .details {
        padding-left: 25px;
      }
    }
  }
}
  
     
    </style>
<section class="breadcrumbs-section bg_cover"  style="background-color: rgb(111, 113, 143);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Events & Achievements</h1>
                    <ul class="link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Events & Achievements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End breadcrumbs-section ======-->
<div class="container-fluid">
    <div class="blog-card container-fluid">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/event.jpeg') }}')"></div>
        </div>
        <div class="description">
          <h1>MSME registered
            -
            RAALTECH Solutions</h1>
          <h2>Raal Tech Solution</h2>
          <p> recognized by the Ministry of
            Small, Medium and Micro Enterprises, Govt. of India.</p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
      <div class="blog-card alt">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/WhatsApp Image 2023-09-24 at 7.22.48 AM (3).jpeg') }}')"></div>

         
        </div>
        <div class="description">
          <h1>ISO
            -
            RAALTECH Solutions</h1>
          <h2>Raal Tech Solution</h2>
          <p>successfully obtained an ISO 9001:2015 quality
            management certificate through various audits and confirmation of
            standards practiced at the company
            .</p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
    <div class="blog-card">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/MSME.jpg') }}')"></div>

        
        </div>
        <div class="description">
          <h1>Press
            Conference on IPR</h1>
          <h2>Raal Tech Solution</h2>
          <p>Dr Matheswaran Alagu, Technical Lead of
            RAALTECH Solutions
           
             attended an
            insightful press meeting
            and
           
             deliberately
            insisted
            on
            the crucial role of
            Intellectual Property Rights (IPR) in shaping our society, especially for
            science
            and engineering domain people.
            The press meeting provided an excellent platform to raise awareness about
            the importance of IPR.</p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
      <div class="blog-card alt">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/msme1.jpg') }}')"></div>

         
        </div>
        <div class="description">
          <h1>Inauguration
           
            of
            IPR Cell at
            GCT
            , Coimbatore</h1>
          <h2>Raal Tech Solution</h2>
          <p>Dr Matheswaran Alagu, Technical Lead of
            RAALTECH Solutions
            invited for
            the
            inaugura
            tion of the Intellectual Property Rights (IPR) Cell
            . He delivered the guest lecture
            on
            "EMERGING TRENDS IN INTELLECTUAL PROPERTY RIGHTS AND ITS IMPACTS ON
            ENGINEERING AND TECHNOLOGY" September 15th, 2023.</p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
    <div class="blog-card">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/NSIC.jpg') }}')"></div>

        
        </div>
        <div class="description">
          <h1>MSME program</h1>
          <h2>Raal Tech Solution</h2>
          <p> Dr Matheswaran Alagu, Technical Lead of
            RAALTECH Solutions
            invited as a
            Panel Member for the Indovation (Indian
            Innovation
            )/Consortium at the IIC
            Regional Meet 2K23 hosted by Nehru Institute of Technology, Coimbatore!</p>
            <p>He
              shared
             
              insights on IPR
              portfolio management for startups with
              Industrialists, Startups, and fellow Technocrats</p>
            <p>Shri Dipan Sahu, Assistant Innovation Director from the Ministry of
              Education, Innovation Cell & AICTE, 
              Government of India
              
              felicitates<br>
              
             
              Dr Matheswaran Alagu
              </p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
      <div class="blog-card alt">
        <div class="meta">
        <div class="photo" style="background-image: url('{{ asset('public/tech/assets/images/press conference.jpg') }}')"></div>

         
        </div>
        <div class="description">
          <h1>NSIC program
           </h1>
          <h2>Raal Tech Solution</h2>
          <p>Dr Matheswaran Alagu, Technical Lead of
            RAALTECH Solutions
            had the
            privilege of being invited to deliver the guest lecture at the "Green Energy Technology"
            training program, hosted by The National Small Industries Corporation (NSIC), Hyderabad, a
            Government of India organization, on October 13, 2023.</p>
            <p>He
              shared insights and knowledge on the topic of "SOLAR PV POWER PLANT PROJECT
              MANAGEMENT
              -
              A Case Study Approach"
              with
              a
              diverse set of audiences
              entrepreneurs,
              students, and professors</p>
          <p class="read-more">
            <a href="events1.html">Read More</a>
          </p>
        </div>
      </div>
    </div>

@include('tech.layout.footer')
