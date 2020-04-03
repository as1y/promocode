<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Form validation</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p>

        <form class="form-validate-jquery" action="#" novalidate="novalidate">
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

                <!-- Basic text input -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="basic" class="form-control" required="" placeholder="Text input validation">
                    </div>
                </div>
                <!-- /basic text input -->


                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input type="text" name="with_icon" class="form-control" required="" placeholder="Text input with icon validation">
                            <div class="form-control-feedback">
                                <i class="icon-droplets"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->


                <!-- Input group -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-mention"></i></span>
                            </div>
                            <input type="text" name="input_group" class="form-control" required="" placeholder="Input group validation">
                        </div>
                    </div>
                </div>
                <!-- /input group -->


                <!-- Password field -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="password" name="password" id="password" class="form-control" required="" placeholder="Minimum 5 characters allowed">
                    </div>
                </div>
                <!-- /password field -->


                <!-- Repeat password -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="password" name="repeat_password" class="form-control" required="" placeholder="Try different password">
                    </div>
                </div>
                <!-- /repeat password -->


                <!-- Email field -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Email field <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" id="email" required="" placeholder="Enter a valid email address">
                    </div>
                </div>
                <!-- /email field -->


                <!-- Repeat email -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="email" name="repeat_email" class="form-control" required="" placeholder="Enter a valid email address">
                    </div>
                </div>
                <!-- /repeat email -->


                <!-- Minimum characters -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="minimum_characters" class="form-control" required="" placeholder="Enter at least 10 characters">
                    </div>
                </div>
                <!-- /minimum characters -->


                <!-- Maximum characters -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="maximum_characters" class="form-control" required="" placeholder="Enter 10 characters maximum">
                    </div>
                </div>
                <!-- /maximum characters -->


                <!-- Minimum number -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="minimum_number" class="form-control" required="" placeholder="Enter a value greater than or equal to 10">
                    </div>
                </div>
                <!-- /minimum number -->


                <!-- Maximum number -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="maximum_number" class="form-control" required="" placeholder="Please enter a value less than or equal to 10">
                    </div>
                </div>
                <!-- /maximum number -->


                <!-- Basic textarea -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <textarea rows="5" cols="5" name="textarea" class="form-control" required="" placeholder="Default textarea"></textarea>
                    </div>
                </div>
                <!-- /basic textarea -->

            </fieldset>

            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Advanced inputs</legend>

                <!-- Number range -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="number_range" class="form-control" required="" placeholder="Enter a value between 10 and 20">
                    </div>
                </div>
                <!-- /number range -->


                <!-- Touchspin spinners -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group bootstrap-touchspin"><span class="input-group-prepend"><button class="btn btn-light bootstrap-touchspin-down" type="button">–</button></span><span class="input-group-prepend bootstrap-touchspin-prefix d-none"><span class="input-group-text"></span></span><input type="text" name="touchspin" value="" required="" class="form-control touchspin-postfix" placeholder="Not valid if empty" style="display: block;"><span class="input-group-append bootstrap-touchspin-postfix"><span class="input-group-text">%</span></span><span class="input-group-append"><button class="btn btn-light bootstrap-touchspin-up" type="button">+</button></span></div>
                    </div>
                </div>
                <!-- /touchspin spinners -->


                <!-- Custom message -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="custom" class="form-control" required="" placeholder="Custom error message">
                    </div>
                </div>
                <!-- /custom message -->


                <!-- URL validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="url" class="form-control" required="" placeholder="Enter a valid URL address">
                    </div>
                </div>
                <!-- /url validation -->


                <!-- Date validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="date" class="form-control" required="" placeholder="April, 2014 or any other date format">
                    </div>
                </div>
                <!-- /date validation -->


                <!-- ISO date validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="date_iso" class="form-control" required="" placeholder="YYYY/MM/DD or any other ISO date format">
                    </div>
                </div>
                <!-- /iso date validation -->


                <!-- Numbers only -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="numbers" class="form-control" required="" placeholder="Enter decimal number only">
                    </div>
                </div>
                <!-- /numbers only -->


                <!-- Digits only -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="digits" class="form-control" required="" placeholder="Enter digits only">
                    </div>
                </div>
                <!-- /digits only -->


                <!-- Credit card validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="card" class="form-control" required="" placeholder="Enter credit card number. Try 446-667-651">
                    </div>
                </div>
                <!-- /credit card validation -->


                <!-- Basic file uploader -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="file" name="unstyled_file" class="form-control" required="">
                    </div>
                </div>
                <!-- /basic file uploader -->


                <!-- Styled file uploader -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="uniform-uploader"><input type="file" name="styled_file" class="form-input-styled" required="" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>
                <!-- /styled file uploader -->


                <!-- Basic select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="default_select" class="form-control" required="">
                            <option value="">Choose an option</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /basic select -->


                <!-- Styled select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Styled select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="uniform-select fixedWidth"><span style="user-select: none;">Choose an option</span><select name="styled_select" class="form-control form-input-styled" required="" data-fouc="">
                                <option value="">Choose an option</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="KY">Kentucky</option>
                                </optgroup>
                            </select></div>
                    </div>
                </div>
                <!-- /styled asic select -->


                <!-- Select2 select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2 select2-hidden-accessible" required="" data-fouc="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="3"></option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select2-in-container"><span class="select2-selection__rendered" id="select2-select2-in-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select a State...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
                <!-- /select2 select -->


                <!-- Multiple select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="default_multiple_select" class="form-control" multiple="" required="">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /multiple select -->

            </fieldset>

            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">Checkboxes and radios</legend>

                <!-- Basic single checkbox -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Basic single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="single_basic_checkbox" required="">
                                Accept our terms
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic singlecheckbox -->


                <!-- Basic checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Basic checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox" required="">
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic checkbox group -->


                <!-- Inline checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Basic inline checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox" required="">
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /inline checkbox group -->


                <!-- Basic radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Basic radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio" required="">
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic radio group -->


                <!-- Basic inline radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Basic inline radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio_group" required="">
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio_group">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic inline radio group -->


                <hr class="mb-4">


                <!-- Single styled checkbox -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Single styled checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="single_styled_checkbox" class="form-input-styled" required="" data-fouc=""></span></div>
                                Accept our terms
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /single styled checkbox -->


                <!-- Styled checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Styled checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="styled_checkbox" class="form-input-styled" required="" data-fouc=""></span></div>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc=""></span></div>
                                Maecenas non nulla ac nunc
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc=""></span></div>
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /styled checkbox group -->


                <!-- Inline checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Inline checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" required="" data-fouc=""></span></div>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-checker"><span><input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" data-fouc=""></span></div>
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /inline checkbox group -->


                <!-- Styled radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Styled radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-choice"><span><input type="radio" name="styled_radio" class="form-input-styled" required="" data-fouc=""></span></div>
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <div class="uniform-choice"><span><input type="radio" name="styled_radio" class="form-input-styled" data-fouc=""></span></div>
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /styled radio group -->


                <!-- Styled inline radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Styled inline radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice"><span><input type="radio" name="styled_inline_radio" class="form-input-styled" required="" data-fouc=""></span></div>
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice"><span><input type="radio" name="styled_inline_radio" class="form-input-styled" data-fouc=""></span></div>
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /styled inline radio group -->

            </fieldset>

            <fieldset>
                <legend class="text-uppercase font-size-sm font-weight-bold">Switcher components</legend>

                <!-- Switchery single -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Swichery single <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="switchery_single" class="form-input-switchery" required="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Accept our terms
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /switchery single -->


                <!-- Switchery group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Swichery group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="switchery_group" class="form-input-switchery" required="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Maecenas non nulla ac nunc
                            </label>
                        </div>

                        <div class="form-check form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /switchery group -->


                <!-- Inline switchery group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Inline swichery group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="inline_switchery_group" class="form-input-switchery" required="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-switchery switchery-sm">
                            <label class="form-check-label">
                                <input type="checkbox" name="inline_switchery_group" class="form-input-switchery" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /inline switchery group -->


                <hr>


                <!-- Switch single -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Switch single <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-switch form-check-switch-left">
                            <label class="form-check-label d-flex align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 94px;"><div class="bootstrap-switch-container" style="width: 138px; margin-left: -46px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 46px;">Yes</span><span class="bootstrap-switch-label" style="width: 46px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 46px;">No</span><input type="checkbox" name="switch_single" data-on-text="Yes" data-off-text="No" class="form-input-switch" required=""></div></div>
                                Accept our terms
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /switch single -->


                <!-- Switch group -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Switch group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-switch form-check-switch-left">
                            <label class="form-check-label d-flex align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 104px;"><div class="bootstrap-switch-container" style="width: 153px; margin-left: -51px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 51px;">ON</span><span class="bootstrap-switch-label" style="width: 51px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 51px;">OFF</span><input type="checkbox" name="switch_group" class="form-input-switch" required=""></div></div>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-switch form-check-switch-left">
                            <label class="form-check-label d-flex align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 104px;"><div class="bootstrap-switch-container" style="width: 153px; margin-left: -51px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 51px;">ON</span><span class="bootstrap-switch-label" style="width: 51px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 51px;">OFF</span><input type="checkbox" name="switch_group" class="form-input-switch"></div></div>
                                Maecenas non nulla ac nunc
                            </label>
                        </div>

                        <div class="form-check form-check-switch form-check-switch-left">
                            <label class="form-check-label d-flex align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 104px;"><div class="bootstrap-switch-container" style="width: 153px; margin-left: -51px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 51px;">ON</span><span class="bootstrap-switch-label" style="width: 51px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 51px;">OFF</span><input type="checkbox" name="switch_group" class="form-input-switch"></div></div>
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /switch group -->


                <!-- Inline switch group -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Inline switch group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline form-check-switch form-check-switch-left">
                            <label class="form-check-label align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 104px;"><div class="bootstrap-switch-container" style="width: 153px; margin-left: -51px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 51px;">ON</span><span class="bootstrap-switch-label" style="width: 51px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 51px;">OFF</span><input type="checkbox" name="inline_switch_group" class="form-input-switch" required=""></div></div>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-switch form-check-switch-left">
                            <label class="form-check-label align-items-center">
                                <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 104px;"><div class="bootstrap-switch-container" style="width: 153px; margin-left: -51px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 51px;">ON</span><span class="bootstrap-switch-label" style="width: 51px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 51px;">OFF</span><input type="checkbox" name="inline_switch_group" class="form-input-switch"></div></div>
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /inline switch group -->

            </fieldset>

            <div class="d-flex justify-content-end align-items-center">
                <button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button>
                <button type="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>