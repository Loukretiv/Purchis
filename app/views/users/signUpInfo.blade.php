@extends('layouts.default')

@section('content')
  <div class="signUpCont">
    <h1 class="ft-white ft-thin">Purchis</h1>

    <div class="signUpText">
      <div style="margin-bottom:50px;">
        <div class="ft-white">
          <p class="ft-thin">Congratulations on your invite to participate in the Purchis Beta Test</p>
          <p class="ft-thin">Before we get started, let's make sure we're all on the same page.</p>
          <br><br>
          <h2 class="ft-thin ft-loukblue" style="text-align:center;">Beta Test</h2>
          <p class="ft-loukblue" style="text-align:center;">
            <span class="ft-light"><em>noun</em></span><span class="ft-thin"> &bull; A quality-control technique in which software is subjected to trial in the environment for which it was designed, prior to general availability.</span>
          </p>
          <br><br>
          <p class="signUpAdv">
            <span class="ft-semi">What is Purchis?</span>
            <span class="ft-thin">A deal-modeling solution for CRE investors to help you make better buying decisions and accelerate your transactions.<br><br>
              Distinct Features:<br>
              &bull; Powerful evaluation tools.<br>
              &bull; Straightforward document management.<br>
              &bull; Thorough property research. </span>
            </p>
            <p class="signUpAdv">
              <span class="ft-semi">Why was I invited?</span>
              <span class="ft-thin">Not everybody who requests an invite will receive one. Some elements of your interaction with us so far indicates you might have the right mix of curiosity and dependability.</span>
            </p>
            <p class="signUpAdv">
              <span class="ft-semi">What will I have to do?</span>
              <span class="ft-thin">Use it. <br><br>Talk to us about your use and answer infrequent surveys. You'll share access to a private forum with us. Post any glitches that you run across, any suggestions for new features, even compliments - We like those :-)</span>
            </p>
            <p class="signUpAdv">
              <span class="ft-semi">Is there a price?</span>
              <span class="ft-thin">Yes. <br><br>This is a subscription based solution and users will be charged either on a monthly or yearly basis. </span>
            </p>
            <p class="signUpAdv">
              <span class="ft-semi">What do I get?</span>
              <span class="ft-thin">As a Beta tester, you'll receive a significant lifetime discount (64%) on your subscription price for this and all future solutions we release. <br><br>Depending on the impact of your contributions, you may also be invited to invest in the company for stock options.</span>
            </p>
            {{ Form::open(array('url'=>'register', 'method'=>'POST', 'class'=>'innerWrap loginForm')) }}
              {{ Form::hidden('key', $key) }}
              {{ Form::submit('I understand, Sign Up &raquo;', array('class'=>'agreementMade')) }}
            {{ Form::close() }}
          </div>
        </div>
      </div>

    </div>
@stop
