<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Pricing
      </h2>
    </x-slot>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");
         * {
        	 box-sizing: border-box;
        	 font-family: "Montserrat", sans-serif;
        }
        h2 {
        	 margin: 0;
        }
        /* Body */
        /* Card Themes - Start */
         .basic .pricing-header {
        	 background-color: #4b7bec;
        }
         .basic .price-circle {
        	 border: 10px solid #4b7bec;
        	 transition: all 0.4s;
        }
         .basic:hover .price-circle {
        	 border-width: 5px;
        }
         .basic .buy-now:hover {
        	 background-image: none !important;
        	 background-color: #4b7bec !important;
        	 box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.4);
        }
         .eco .pricing-header {
        	 background-color: #f7b731;
        }
         .eco .price-circle {
        	 border: 10px solid #f7b731;
        	 transition: all 0.4s;
        }
         .eco:hover .price-circle {
        	 border-width: 5px;
        }
         .eco .buy-now:hover {
        	 background-image: none !important;
        	 background-color: #f7b731 !important;
        	 box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.4);
        }
         .pro .pricing-header {
        	 background-color: #26de81;
        }
         .pro .price-circle {
        	 border: 10px solid #26de81;
        	 transition: all 0.4s;
        }
         .pro:hover .price-circle {
        	 border-width: 5px;
        }
         .pro .buy-now:hover {
        	 background-image: none !important;
        	 background-color: #26de81 !important;
        	 box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.4);
        }
         .business .pricing-header {
        	 background-color: #a55eea;
        }
         .business .price-circle {
        	 border: 10px solid #a55eea;
        	 transition: all 0.4s;
        }
         .business:hover .price-circle {
        	 border-width: 5px;
        }
         .business .buy-now:hover {
        	 background-image: none !important;
        	 background-color: #a55eea !important;
        	 box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.4);
        }
        /* Card Themes - End */
        .container {
        	 max-width: 1200px;
        	 height: auto;
        	 margin: auto;
        	 display: flex;
        	 flex-wrap: wrap;
        	 justify-content: center;
        	 text-align: center;
        }
        .column {
        	 flex: 25%;
        	 padding: 10px;
        	 width: calc(33.3% - 30px);
        	 box-sizing: border-box;
        }
         @media screen and (max-width: 980px) {
        	 .column {
        		 flex: 50%;
        		 display: block;
        	}
        }
         @media screen and (max-width: 700px) {
        	 .column {
        		 flex: 100%;
        		 display: block;
        	}
        }
         .pricing-card {
        	 -webkit-transition: 0.4s background-color ease;
        	 -ms-transition: 0.4s background-color ease;
        	 transition: 0.4s background-color ease;
        	 height: 600px;
        	 background-color: white;
        	 -moz-border-radius: 20px;
        	 -webkit-border-radius: 20px;
        	 border-radius: 20px;
        	 position: relative;
        	 transition: all 0.4s;
        }
         .pricing-card:hover {
        	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
        	 transform: scale(1.05);
        }
         .pricing-card .popular {
        	 position: absolute;
        	 top: 0;
        	 right: 5%;
        	 width: auto;
        	 padding: 10px;
        	 border-bottom-left-radius: 20px;
        	 border-bottom-right-radius: 20px;
        	 background-color: #eb3b5a;
        	 color: white;
        	 font-size: 12px;
        	 z-index: 1;
        	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
         .pricing-card .badge-box {
        	 padding: 0 40px;
        	 margin-top: 80px;
        }
         .pricing-card .badge-box span {
        	 display: inline-block;
        	 border: 1px solid #4b7bec;
        	 padding: 4px 12px;
        	 border-radius: 25px;
        	 overflow: hidden;
        	 color: #4b7bec;
        }
         .pricing-card .pricing-header {
        	 width: 100%;
        	 height: 150px;
        	 position: relative;
        	 border-radius: 20px 20px 0 0;
        	 -webkit-border-radius: 20px 20px 0 0;
        	 -moz-border-radius: 20px 20px 0 0;
        }
         .pricing-card .pricing-header .plan-title {
        	 font-size: 24px;
        	 color: white;
        	 position: relative;
        	 top: 25%;
        }
         .pricing-card .pricing-header .price-circle {
        	 width: calc(33.3% - 30px);
        	 width: 120px;
        	 height: 120px;
        	 border-radius: 100%;
        	 left: calc(50% - 60px);
        	 top: 60%;
        	 background-color: white;
        	 position: absolute;
        }
         .pricing-card .pricing-header .price-circle .info {
        	 display: block;
        	 font-size: 12px;
        	 font-weight: bold;
        	 color: gray;
        }
         .pricing-card .pricing-header .price-circle .price-title {
        	 display: block;
        	 font-size: 28px;
        	 padding: 28px 0 0;
        	 font-weight: bold;
        }
         .pricing-card .pricing-header .price-circle .price-title small {
        	 font-size: 18px;
        }
         .pricing-card .pricing-header h2 {
        	 position: relative;
        	 top: 40%;
        	 color: #fff;
        }
         .pricing-card ul {
        	 margin: 10px 0 0 0;
        	 padding: 0;
        }
         .pricing-card ul li {
        	 list-style-type: none;
        	 display: block;
        	 padding: 15px 0 15px 0;
        	 margin: 0;
        	 border-bottom: 1px solid #f2f2f2;
        }
         .pricing-card .buy-button-box {
        	 width: 100%;
        	 float: left;
        	 margin-top: 30px;
        }
         .pricing-card .buy-button-box .buy-now {
        	 text-decoration: none;
        	 color: white;
        	 padding: 10px 30px;
        	 border-radius: 20px;
        	 background-image: linear-gradient(to left, #a55eea, #45aaf2);
        	 margin-top: 20px;
        }
    </style>

    <div class="container mpt-5">
      @if (session()->has('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              <p class="font-bold">Success!</p>
              <p class="text-sm">{{ session('success') }}</p>
            </div>
          </div>
        </div>
      @endif
    </div>

    <div class="container py-5">
      <div class="column">
        <div class="pricing-card basic">
          <div class="pricing-header">
            <span class="plan-title">QUICK HOOK UP</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>7.00</span>
              </span>
              <span class="info">/ Week</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Unlimited Access</span>
          </div>
          <ul>
            <li>
              <strong>See</strong> Who Viewed Your Profile
            </li>
            <li>
              <strong>View</strong> All Profiles & Photos
            </li>
            <li>
              <strong>Chat</strong> With Any Member
            </li>
            <li>
              <strong>Send</strong> Free Flirts
            </li>
            <li>
              <strong>Access</strong> Private Content
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="{{ route('subscribe', ['id' => 'price_1KavbCLzZgjLiNkC909Wommg']) }}" class="buy-now">CHOOSE PLAN</a>
          </div>        
        </div>
      </div>
      <div class="column">
        <div class="pricing-card eco">
          <div class="pricing-header">
            <span class="plan-title">ECO PLAN</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>28.00</span>
              </span>
              <span class="info">/ Month</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Unlimited Access</span>
          </div>
          <ul>
            <li>
              <strong>See</strong> Who Viewed Your Profile
            </li>
            <li>
              <strong>View</strong> All Profiles & Photos
            </li>
            <li>
              <strong>Chat</strong> With Any Member
            </li>
            <li>
              <strong>Send</strong> Free Flirts
            </li>
            <li>
              <strong>Access</strong> Private Content
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="{{ route('subscribe', ['id' => 'price_1KavbCLzZgjLiNkCnJzGq6Su']) }}" class="buy-now">CHOOSE PLAN</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="pricing-card pro">
          <div class="popular">POPULAR</div>
          <div class="pricing-header">
            <span class="plan-title">BEST VALUE</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>80.00</span>
              </span>
              <span class="info">/ 3 Months</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Unlimited Access</span>
          </div>
          <ul>
            <li>
              <strong>See</strong> Who Viewed Your Profile
            </li>
            <li>
              <strong>View</strong> All Profiles & Photos
            </li>
            <li>
              <strong>Chat</strong> With Any Member
            </li>
            <li>
              <strong>Send</strong> Free Flirts
            </li>
            <li>
              <strong>Access</strong> Private Content
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="{{ route('subscribe', ['id' => 'price_1KavbCLzZgjLiNkC8hwiLWvS']) }}" class="buy-now">CHOOSE PLAN</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="pricing-card business">
          <div class="pricing-header">
            <span class="plan-title">MOST POPULAR</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>150.00</span>
              </span>
              <span class="info">/ 6 Months</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Unlimited Access</span>
          </div>
          <ul>
            <li>
              <strong>See</strong> Who Viewed Your Profile
            </li>
            <li>
              <strong>View</strong> All Profiles & Photos
            </li>
            <li>
              <strong>Chat</strong> With Any Member
            </li>
            <li>
              <strong>Send</strong> Free Flirts
            </li>
            <li>
              <strong>Access</strong> Private Content
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="{{ route('subscribe', ['id' => 'price_1KavbCLzZgjLiNkCW3RhzhFC']) }}" class="buy-now">CLAIM OFFER</a>
          </div>
        </div>
      </div>
      @if($app_type == 'CPL')
      <div class="mt-16 text-center">
        <a href="https://hushcupid.com/login" class="">Not now, take me to the free area.</a>
      </div>
      @endif
    </div>
    @push('scripts')
        <script>
            
        </script>
    @endpush
</x-app-layout>