@extends('frontend.new_layouts.app')

@push('css')
    <link rel="stylesheet" href="{{asset('elite/css/form.css')}}" />
@endpush

@section('content')
{{--    {{ Route::currentRouteName() }}--}}

    <div class="container">
        <div class="popup" id="thank-you-message">
            <img src="{{asset('elite/src/png/avatar-1.png')}}" alt="thanks">
            <span>We Will Get In Touch With You Soon!</span>



        </div>
        <h2>Become A Partner</h2>
        <form action="">
            <div class="inner-container">
                <div class="user-box">
                    <input type="text" name="username" required="">
                    <label>Full Name</label>
                </div>
                <div class="user-box">
                    <input type="email" name="email" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="tel" name="phone" pattern="^(00201|\+201|01)[0-2,5]{1}[0-9]{8}$" required>
                    <label>Mobile Number</label>
                </div>
                <div class="user-box">
                    <input type="tel" name="phone1" >
                    <label>Another Mobile Number</label>
                </div>
                <select>
                    <option hidden>Subscription Type</option>
                    <option value="">Personal</option>
                    <option value="">Company</option>
                    <option value="">Institution</option>
                </select>
                <div class="user-box">
                    <input type="file" name="uploadid" value="" required min="" max="">
                    <label class="date">Upload personal identification</label>
                </div>

                <label class="form-control">
                    <input type="radio" name="terms" />
                    I agree to the terms and conditions
                </label>

            </div>
            <button class="letsTalkBtn form-btn" type="submit">
                <p class="letsTalkBtn-text">Submit</p>
                <span class="letsTalkBtn-BG"></span>
            </button>
        </form>
    </div>






    <section id="terms-of-service" class="container">
        <div class="card">
            <h1 class="primary-heading">Terms & Conditions</h1>
            <p class="paragraph">








                Registration: Affiliate marketers must officially register with the company, providing their personal information and contact details. Agreement Language: Clearly define the terms of the affiliate marketing agreement, including the commission rate and
                specific financial terms. Promotion Methods: Specify the methods that can be used to promote the company's services or software products, whether it's through websites, social media, or email campaigns. Reporting and Tracking: Request
                regular reports from affiliates outlining their efforts and the sales generated through their marketing efforts. Brand Usage: Determine how the company's brand can be used in affiliate marketing and prohibit any unauthorized use. Dispute
                Resolution: Clarify the dispute resolution policy and how affiliates should handle customer issues. Agreement Duration: Specify the duration of the agreement and the conditions for termination by either the company or the affiliate marketer.
                Customer Support: Provide support to affiliate marketers to answer their questions and assist them in maximizing the benefits of the agreement. Payment: Define the timing and method of payment for earned commissions. Legal Compliance:
                Explain prohibited activities and legal violations that may lead to the termination of the agreement. These terms should be written clearly and comprehensibly to ensure understanding between the company and affiliate marketers and to ensure
                smooth operations.
            </p>
        </div>
    </section>








@endsection

@push('script')
    <script src="{{asset('elite/js/formscript.js')}}"></script>
@endpush
