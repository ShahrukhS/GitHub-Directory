
    <body class="signUpPage">
        <header id="signUpHeader">
            <a href="index.html"><img src="Content/images/FrontPages/logo.png" alt="shopunion logo"/></a>
        </header>
        
        

<div class="stepsBox">
    <div class="wrapper">
        <ul class="steps">
            <li class="first active">Step 1 is Done<em></em></li>
            <li class="secound">Step 2 is undone<em></em></li>
            <li class="third">Step 3 is undone<em></em></li>
        </ul>
        <div class="progressBar">
            <div class="progress level1">
            </div>
        </div>
    </div>
</div>
<div class="formOuter">
    <div class="wrapper">
<form action="http://shopunion.com/Home/CreateBusiness" id="businessForm" method="post"><input id="SignUpType" name="SignUpType" type="hidden" value="general" /><input id="CountryName" name="CountryName" type="hidden" value="US" />            <section class="form stepOne">
                <h1>
                    Enter Your Personal Information</h1>
                <div class="formWrap">
                    <div class="formBox leftBox">
                        <ul>
                            <li>
                                <label>
                                    First name:
                                </label>
                                <input class="text-box single-line" data-val="true" data-val-required="The First name: field is required." id="FirstName" name="FirstName" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Last name:
                                </label>
                                <input class="text-box single-line" data-val="true" data-val-required="The Last name: field is required." id="LastName" name="LastName" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Email:
                                </label>
                                <input class="text-box single-line" data-val="true" data-val-required="The Email: field is required." id="Email" name="Email" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Password:
                                </label>
<input data-val="true" data-val-length="The Password: must be at least 5 characters long." data-val-length-max="100" data-val-length-min="5" data-val-required="The Password: field is required." id="Password" name="Password" type="password" />                                <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Confirm:
                                </label>
<input data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" data-val-required="The Confirm: field is required." id="ConfirmPassword" name="ConfirmPassword" type="password" />
<span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="formBox">
                        <div class="signUpFreeBox">
                            <h2>
                                Sign Up</h2>
                            <h4>
                                Sign up is free and easy!</h4>
                            <p>
                                We offer free accounts for all civic organizations, non-profits, schools, churches,
                                clubs, and other non-business entities.</p>
                        </div>
                        <div class="formBtnWrap">
                            <a href="#" class="redBtn right nextStepBtn">Next Step: Enter Your Business Information</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="form stepTwo" style="display: none;">
                <h1>
                    Enter Your Business Information</h1>
                <div class="formWrap">
                    <div class="formBox leftBox">
                        <ul>
                                <li>
                                    <label>
                                        State:
                                    </label>
                                    <select data-placeholder="Select state" data-val="true" data-val-required="The State field is required." id="SelectedState" name="SelectedState"><option value=""></option>
<option value="150e78e1-b01e-4f0a-aa29-8ff57dc5253a">Alabama</option>
<option value="0ae6479b-f53d-41ce-ab19-3b3c1d747966">Alaska</option>
<option value="e7b0baa9-6869-48b2-953e-6742a082ee52">American Samoa</option>
<option value="db735aaa-d729-4cd7-9783-c45696de88be">Arizona</option>
<option value="a31c6278-d1ac-47e0-b4f9-0f60e25ebfe4">Arkansas</option>
<option value="78a234bc-0c08-4cbe-a0ed-81f96f7d5643">California</option>
<option value="35db1832-5fa1-4dc0-98ae-46a9ad821c2e">Colorado</option>
<option value="12dacaac-59f3-4cb8-9fd8-f423386703b5">Connecticut</option>
<option value="b908169f-9a7d-4da1-b08c-2656416602aa">Delaware</option>
<option value="d9281e7f-7e9a-47d9-9462-66faadae5e29">District of Columbia</option>
<option value="2f166307-7e48-45f2-a337-6c34e4db12ba">Florida</option>
<option value="67d7bf8a-5272-4931-a0e0-3e9d838c9e98">Georgia</option>
<option value="fe9a51e6-0a52-4df0-96cd-961d1f40168f">Guam</option>
<option value="d3318769-6841-4870-b010-f5f5f6128d60">Hawaii</option>
<option value="25b579db-386a-430c-ad01-5c169276a430">Idaho</option>
<option value="3d590c89-670d-4bd8-a9cb-c2bca09c28d9">Illinois</option>
<option value="9d21d4ec-ebfe-4be3-bfbf-66702e8851b6">Indiana</option>
<option value="f365c3d8-b172-404b-a0b9-39a05052873e">Iowa</option>
<option value="a0665b8f-e7d0-4783-927c-7600f2f896fb">Kansas</option>
<option value="4bc123c3-841e-4561-a20b-f0bfa3e9d141">Kentucky</option>
<option value="8f1ec345-68a5-404a-97db-9fe70dff7a11">Louisiana</option>
<option value="18508f0d-4b1f-4b08-9754-dc19ab28ad5f">Maine</option>
<option value="9090ae3c-a373-4010-9b75-667dccb8a60b">Maryland</option>
<option value="e770d3a1-ecb4-4bc5-9e3f-33462d56ddf1">Massachusetts</option>
<option value="da559789-da69-431e-9828-ffe5062327a0">Michigan</option>
<option value="3d7a55da-7803-4614-ad83-ccc4906ed60d">Minnesota</option>
<option value="8bafa0d1-f82a-467b-a2cf-f9d1766a1a85">Mississippi</option>
<option value="4f1405b5-1756-4189-bc57-f1a0240bc50c">Missouri</option>
<option value="149d1be6-e2b0-48c2-b887-241eb076b410">Montana</option>
<option value="1da18c2c-29e9-4b81-ad2f-7fa185713822">Nebraska</option>
<option value="872aec4d-bf7c-4d96-ac61-e703169f670b">Nevada</option>
<option value="a767ceeb-0f82-48aa-8c4b-15e7c0ce70a9">New Hampshire</option>
<option value="2390c3b0-8f9d-4e67-a813-8adea13ca101">New Jersey</option>
<option value="e17ca9e5-6937-48ed-b403-b5816a9e1310">New Mexico</option>
<option value="fd8b99c5-eab7-4755-95bc-d91b585dceb6">New York</option>
<option value="c5c64f4f-f818-4416-ab13-658c83808749">North Carolina</option>
<option value="9c683a3f-d9cc-433d-8406-63cbff97f30a">North Dakota</option>
<option value="1a8a5ebb-e268-4c79-a547-50dfe31d3135">Northern Marianas Islands</option>
<option value="e1d65fcd-fa79-4371-a4eb-dd5a066ecb7e">Ohio</option>
<option value="863bb382-64f6-404d-8d30-253a34726288">Oklahoma</option>
<option value="6f5018a0-951b-4ce7-937e-c2ebca3c83c3">Oregon</option>
<option value="902d1341-913b-4cc3-a9bb-c94fb5283c50">Pennsylvania</option>
<option value="7154adf6-ec51-4450-bec6-9ed8db74eaa9">Puerto Rico</option>
<option value="af9da307-6c83-41bb-b9b9-477172420371">Rhode Island</option>
<option value="6d722ba5-580e-4b05-9643-6efcdf5bb930">South Carolina</option>
<option value="57c3e297-13e8-475d-b54b-450cbcdd9cf1">South Dakota</option>
<option value="8498fd36-1eef-40a5-a92a-0e003a680b93">Tennessee</option>
<option value="22bc2beb-c67e-4ab1-8123-9b1bebc4b555">Texas</option>
<option value="70896d06-bc83-461e-84fa-4a09168dc022">Utah</option>
<option value="2459df86-4575-4539-854a-8d48d9aea8f7">Vermont</option>
<option value="20978dd2-1e72-40c5-a09b-3bc186340939">Virgin Islands </option>
<option value="7677f087-73a9-4684-acc6-15f80e7a5643">Virginia </option>
<option value="035a206e-785c-4698-ba2a-dfa16ae8e28b">Washington</option>
<option value="ae1213a8-0526-4747-b31c-ce11eff6b7d5">West Virginia</option>
<option value="d9318f76-4500-43a2-b1fa-43d0a2c2661b">Wisconsin</option>
<option value="06b482d1-9811-45f6-a3c8-9c473a5ec9c7">Wyoming</option>
</select>
                                    <span class="field-validation-valid" data-valmsg-for="SelectedState" data-valmsg-replace="true"></span>
                                </li>
                                <li>
                                    <label>
                                        City:
                                    </label>
                                    <input data-val="true" data-val-required="The City field is required." id="SelectedFeed" name="SelectedFeed" type="hidden" value="" />
                                    <span class="field-validation-valid" data-valmsg-for="SelectedFeed" data-valmsg-replace="true"></span>
                                </li>
                            
                            <li>
                                <label>
                                    Business Name:
                                </label>
                                <input class="text-box single-line" data-val="true" data-val-required="The Business Name field is required." id="BusinessName" name="BusinessName" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="BusinessName" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Category:
                                </label>
                                <!--<select data-placeholder="Select category" data-val="true" data-val-required="The Category field is required." id="SelectedCategory" name="SelectedCategory"><option value=""></option>
<option value="6c432470-2c72-43ea-ac66-ef63c16402b9">Arts/Crafts</option>
<option value="d9d541e5-ae59-4ef9-bcea-9d32c010e41b">Associations</option>
<option value="2963c03e-2c46-461b-8b36-a46a476524fc">Automotive</option>
<option value="31516cbb-560e-4355-8d5c-ef9bedf6d182">Banks</option>
<option value="db74ac10-78c3-4dba-b035-35b1af6e1ec9">Bars</option>
<option value="ff877326-3a28-4601-9025-58d2f05e2172">Charitable Organizations</option>
<option value="9037df20-4e92-4928-9263-b727b31243a3">Clubs</option>
<option value="ca8a34c2-27ea-4d20-b2ae-7b4235e5bd54">Entertainment/Bands</option>
<option value="7eea044a-f0e6-474c-99bd-aa70ba0ca592">Events/Festivals</option>
<option value="cc10cf17-d6cb-40f1-b91a-b0014efd78bf">Fitness</option>
<option value="1437b8cf-4e49-4943-9ae6-cf0be867c22b">Food Trucks</option>
<option value="f6f28e8e-42eb-46ab-8943-97fbf109704c">Funeral Homes/Monuments</option>
<option value="48e4deaa-cdd4-41f3-86ce-b8e0f789d867">Government</option>
<option value="605b6d41-c8b3-4187-b7e0-28859512a11e">Health/Beauty/Wellness</option>
<option value="8fe8faa4-500c-4eba-889f-1756aa99a8ef">Historic/Tourism</option>
<option value="0f19eb4d-b8c7-4bd3-a09a-5e116048c2c8">Home Services</option>
<option value="806be520-28ee-41ad-aa3a-300eeb52cab8">Hotels/B&amp;Bs</option>
<option value="1e2df6e3-9643-4a73-b531-c87e994c4fb8">Legal</option>
<option value="3cbd42e7-ebe9-4411-932a-526fde77a65b">Medical/Dental</option>
<option value="62cb1246-b0ac-40ef-919c-eaa8a519aecb">Miscellaneous</option>
<option value="20550275-c951-4f98-acd2-8cbf85e89bd9">News/Publications</option>
<option value="4bcc4347-45c1-44b7-95fc-ffddd43e6f2d">Pet Care</option>
<option value="aa8afb08-b509-4103-9cd1-96e5d619cefe">Politics</option>
<option value="d943aada-833d-4507-9383-a6fd5d01039e">Professional</option>
<option value="02de73ad-428a-4f60-ba4e-37a9e598e928">Real Estate</option>
<option value="69a2d8a8-f9ba-4286-ae0b-a46ee9a5d22a">Religious</option>
<option value="0d943ecf-34ef-4ccc-be86-31552dc484de">Restaurants</option>
<option value="64c338ae-f3f9-4cfd-ba71-c867e73fd8b4">Retail</option>
<option value="68712b02-a2a6-4ecc-a89d-1ca6b23fb91e">Schools</option>
<option value="09a48cf3-4c29-406c-bece-8a54da5c92cc">Sports/Teams</option>
<option value="0db27434-b034-4a3d-8ef4-79cdedc3e2fe">Technology</option>
<option value="6be09b28-e1f5-4163-be04-2dc516bed664">TV/Radio</option>
</select>-->
					<?php
					$attributes = 'data-placeholder = "Select category" data-val = "true" data-val-required = "The Category field is required."
						id = "SelectedCategory"';
					echo form_dropdown('SelectedCategory', $allCats, '',$attributes); //echo form_dropdown('SelectedCategory', $categories, '',$attributes);
					?>
                                <span class="field-validation-valid" data-valmsg-for="SelectedCategory" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Frequency:
                                </label>
                                <select data-placeholder="Select frequency" data-val="true" data-val-required="The Frequency field is required." id="SelectedFrequency" name="SelectedFrequency"><option value=""></option>
<option value="120e9402-695e-4841-a085-5334d60352d5">1 or more a day</option>
<option value="05b10e73-c79d-4361-8f18-bcbd99ab1517">As events happen</option>
<option value="e43f5eef-b57d-4082-bccd-e13c3d1ce548">Several per month</option>
<option value="1aab2603-333a-4874-9eb1-5fa1d3010ddf">Several per week</option>
</select>
                                <span class="field-validation-valid" data-valmsg-for="SelectedFrequency" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Type:
                                </label>
                                <input class="text-box single-line" data-val="true" data-val-required="The Type field is required." id="Type" name="Type" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="Type" data-valmsg-replace="true"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="formBox">
                        <ul>
                            <li>
                                <label>
                                    Website (Optional):
                                </label>
                                <input class="text-box single-line" id="Site" name="Site" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="Site" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Phone (Optional):
                                </label>
                                <input class="text-box single-line" id="Phone" name="Phone" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <label>
                                    Description:
                                </label>
                                <textarea cols="5" data-val="true" data-val-required="The Description field is required." id="Description" name="Description" rows="5">
</textarea>
                                <span class="field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
                            </li>
                            <li>
                                <div class="formBtnWrap">
                                    <a href="#" class="grayBtnTwo prevStepBtn">« Back</a> 
                                    <a href="#" class="redBtn nextStepBtn">
                                        Next Step: Choose Your Package
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="form stepThree" style="display: none;">
                <h1>
                    Choose Your Package
                </h1>
                <input data-val="true" data-val-required="The Package: field is required." id="AccountType" name="AccountType" type="hidden" value="Basic" />
                <div class="formWrap">
                    <div class="packageWrapTwo">
                        <div class="packageBox">
                            <div class="titleBar">
                                <h4>
                                    Basic Package</h4>
                                <small>45-day free trial</small>
                            </div>
                            <div class="wrapBox">
                                <div class="valueBoxTwo">
                                    <sup>$</sup><strong>50</strong><sub>/month</sub>
                                </div>
                                <ul class="packageListTwo">
                                    <li><span>Push unlimited updates to your followers</span></li>
                                    <li class="cross"><span>Every user that adds your city will automatically follow you.</span></li>
                                </ul>
                                <div class="btnbox">
                                    <a href="#" class="btn2 selectPlanBtn">
                                        Start Free Trial
                                        <input type="hidden" value="Basic" id="basicAccountType"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="packageBox premium">
                            <em class="ribbon">best value</em>
                            <div class="titleBar">
                                <h4>
                                    Premium Package</h4>
                                <small>get the most out of shopunion</small>
                            </div>
                            <div class="wrapBox">
                                <div class="valueBoxTwo">
                                    <sup>$</sup><strong>75</strong><sub>/month</sub>
                                </div>
                                <ul class="packageListTwo">
                                    <li><span>Push unlimited updates to your followers</span></li>
                                    <li><span>Every user that adds your city will automatically follow you.</span></li>
                                </ul>
                                <div class="btnbox">
                                    <a href="#" class="btn2 red selectPlanBtn">
                                        Select Plan
                                        <input type="hidden" value="Premium" id="premiumAccountType"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="packageBox free">
                            <div class="titleBar">
                                <h4>
                                    Community Package</h4>
                                <small>for non-profits &amp; organizations only</small>
                            </div>
                            <div class="wrapBox">
                                <div class="valueBoxTwo">
                                    <strong>FREE</strong>
                                </div>
                                <ul class="packageListTwo">
                                    <li><span>Push unlimited updates to your followers</span></li>
                                    <li class="cross"><span>Every user that adds your city will automatically follow you.</span></li>
                                </ul>
                                <div class="btnbox">
                                    <a href="#" class="btn2 selectPlanBtn">
                                        Select Plan
                                        <input type="hidden" value="Free" id="freeAccountType"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="form stepThreeBasic" style="display: none;">
                <h1>Confirm Your Package</h1>
                <div class="formWrap selectedBox">
                    <div class="packageWrapTwo">
                        <div class="selectedPlan">
                            <h3 class="selectHeading">Your Selected Plan:</h3>
                            <div class="packageBox">
                                <div class="titleBar">
                                    <h4>Basic Package</h4>
                                    <small>45-day free trial</small>
                                </div>
                                <div class="wrapBox">
                                    <div class="valueBoxTwo">
                                        <sup>$</sup><strong>50</strong>
                                    </div>
                                    <ul class="packageListTwo">
                                        <li><span>Push unlimited updates to your followers</span></li>
                                        <li class="cross"><span>Every user that adds your city will automatically follow you.</span></li>
                                    </ul>
                                    <div class="btnbox">
                                        <a href="#" class="btn2 selectPlanBtn">
                                            Start Free Trial
                                            <input type="hidden" value="Basic"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="toChange">Wrong package? <a href="#" class="changePackageBtn">Click here to change</a></p>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="form stepThreePremium" style="display: none;">
                <h1>Confirm Your Package</h1>
                <div class="formWrap selectedBox">
                    <div class="packageWrapTwo">
                        <div class="selectedPlan">
                            <h3 class="selectHeading">Your Selected Plan:</h3>
                            <div class="packageBox premium">
                                <em class="ribbon">best value</em>
                                <div class="titleBar">
                                    <h4>Premium Package</h4>
                                    <small>get the most out of shopunion</small>
                                </div>
                                <div class="wrapBox">
                                    <div class="valueBoxTwo">
                                        <sup>$</sup><strong>75</strong>
                                    </div>
                                    <ul class="packageListTwo">
                                        <li><span>Push unlimited updates to your followers</span></li>
                                        <li><span>Every user that adds your city will automatically follow you.</span></li>
                                    </ul>
                                    <div class="btnbox">
                                        <a href="#" class="btn2 red selectPlanBtn">
                                            Select Plan
                                            <input type="hidden" value="Premium"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="toChange">Wrong package? <a href="#" class="changePackageBtn">Click here to change</a></p>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section class="form stepThreeFree" style="display: none;">
                <h1>Confirm Your Package</h1>
                <div class="formWrap selectedBox">
                    <div class="packageWrapTwo">
                        <div class="selectedPlan">
                            <h3 class="selectHeading">Your Selected Plan:</h3>
                            <div class="packageBox free">
                                <div class="titleBar">
                                    <h4>Community Package</h4>
                                    <small>for non-profits &amp; organizations only</small>
                                </div>
                                <div class="wrapBox">
                                    <div class="valueBoxTwo">
                                        <strong>FREE</strong>
                                    </div>
                                    <ul class="packageListTwo">
                                        <li><span>Push unlimited updates to your followers</span></li>
                                        <li class="cross"><span>Every user that adds your city will automatically follow you.</span></li>
                                    </ul>
                                    <div class="btnbox">
                                        <a href="#" class="btn2 selectPlanBtn">
                                            Select Plan
                                            <input type="hidden" value="Free"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="toChange">Wrong package? <a href="#" class="changePackageBtn">Click here to change</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <input type="hidden" name="couponCode" id="couponCodeMain"/>
            <input type="hidden" name="stripeToken" id="stripeToken" />
</form>        
        <form action="#" id="stripeTokenForm">
            <section class="form stepFour" style="display: none;">
                <h1>
                    Enter Your Credit Card Information
                </h1>
                <div class="formWrap">
                    <div class="formBox leftBox">
                        <ul>
                            <li>
                                <label>
                                    Name on card:
                                </label>
                                <input type="text" id="cardName" class="required" />
                            </li>
                            <li>
                                <label>
                                    Address:
                                </label>
                                <input type="text" name="address" id="cardAddress" class="required" />
                            </li>
                            <li>
                                <label>
                                    City:
                                </label>
                                <input type="text" name="city" id="cardCity" class="required" />
                            </li>
                            <li>
                                <label>
                                    State:
                                </label>
                                <select id="cardState" class="required errorAppendToParent">
                                    <option value="" selected="">Select State</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="District of Columbia">District of Columbia</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Northern Marianas Islands">Northern Marianas Islands</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virgin Islands ">Virgin Islands </option>
                                        <option value="Virginia ">Virginia </option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    Postal Code:
                                </label>
                                <input type="text" name="postal" id="cardPostalCode" class="required" />
                            </li>
                        </ul>
                    </div>
                    <div class="formBox rightBox">
                        <ul>
                            <li>
                                <label>
                                    Card Number:
                                </label>
                                <input type="text" id="cardNumber" class="required" />
                            </li>
                            <li>
                                <label>
                                    Card Expiration:
                                </label>
                                <select id="cardMonth" class="required">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                <em>/</em>
                                <select id="cardYear" class="required">

                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    CVC Code:
                                </label>
                                <input type="text" class="half required errorAppendToParent" id="cardCvc" />
                                <figure class="cvcImage">
                                    <img src="Content/images/FrontPages/cvc.png" alt="" />
                                </figure>
                            </li>
                            <li>
                                <label>
                                    Coupon Code:
                                </label>
                                <input type="text" id="couponCode" />
                            </li>
                            <li>
                                <div class="formBtnWrap">
                                    <a href="#" class="redBtn right" id="subscribePremiumBtn">Next Step: Verify your email</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>

<input id="errorMessage" type="hidden"/>


    
        <footer class="signUpFooter">
            <nav class="footerNav">
                <ul>
                    <li><a href="Home/PrivacyPolicy.html">Privacy Policy</a></li>
                    <li><a href="mailto:info@shopunion.org">Contact</a></li>
                    <li><a href="#">&copy; shopunion</a></li>
                </ul>
            </nav>
        </footer>
        
        
    <script>
        var l10n = l10n || {};
        l10n.phoneMask = '?999-999-9999';
    </script>
    <script src="Scripts/FrontPages/signUp5417.js?v=fe0aS-wx2GcXVnSJR6h-dlDyuXKtNProCPlsxgR1QpM1"></script>


    </body>

</html>
