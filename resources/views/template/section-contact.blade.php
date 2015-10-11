	<section>
            <div class="section-name-wrap">
                <div class="section-name">
                    <div class="heading-container">
                        <img class="vertical-line" src="img/line.png" alt=""><span>CONTACT</span>
                        
                    </div>
                </div>
            </div>
            <div class="word">
                <span id="change-word"></span><span class="under-score animated flash infinite">_</span>
             
                <span id="cv-img" class="floating-img"><a href="{{url('./img/martin-cv.pdf')}}" target="_blank" id="cv-download"><img src="img/cv.png" alt=""></a></span>
                
            </div>
            {!! Form::open(['url'=>'users', 'class'=>'pure-form'])!!}
           
                 <fieldset class="mobile-contact">

                    <div class="pure-control-group">

                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name') !!}
                    {!! $errors->first('name', '<p class="error">:message</p>') !!}
                    
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email') !!}
                    {!! $errors->first('email', '<p class="error">:message</p>') !!}

                    {!! Form::label('message','Message') !!}
                    {!! Form::textarea('message') !!}
                    {!! $errors->first('message', '<p class="error">:message</p>') !!}

                      
                    </div>

                    <div class="button-wrap">

                      {!! Form::submit('Send',['class'=>'button pure-button pure-button-primary']) !!}

                    </div>
                </fieldset>
            
            {!! Form::close() !!}

        </section><!-- contact section -->
