<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>It's Brain - premium admin HTML template by Eugene Kopyov</title>

    <link href="{{url('css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('reset.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('dataTable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('ui_custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{url('js/plugins/forms/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/autosize.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/autotab.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/validationEngine-en.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/validationEngine.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/listbox.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/inputlimiter.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/forms/cleditor.js')}}"></script>

    <script type="text/javascript" src="{{url('js/globalize/globalize.js')}}"></script>
    <script type="text/javascript" src="{{url('js/globalize/globalize.culture.de-DE.js')}}"></script>
    <script type="text/javascript" src="{{url('js/globalize/globalize.culture.ja-JP.js')}}"></script>

    <script type="text/javascript" src="{{url('js/plugins/uploader/plupload.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/uploader/plupload.html5.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/uploader/plupload.html4.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/uploader/plupload.queue.js')}}"></script>

    <script type="text/javascript" src="{{url('js/plugins/wizards/form.wizard.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/wizards/validate.js')}}"></script>

    <script type="text/javascript" src="{{url('js/plugins/ui/progress.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/jgrowl.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/tipsy.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/alerts.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/colorpicker.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/calendar.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/dataTables.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/breadcrumbs.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/collapsible.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/ToTop.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/listnav.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/sourcerer.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/timeentry.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins/ui/prettyPhoto.js')}}"></script>

    <script type="text/javascript" src="{{url('js/custom.js')}}"></script>

</head>

<body>

<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><strong class="numberTop">8</strong></a>
                        <ul class="menu_body">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><a href="/" title=""><img src="images/loginLogo.png" alt="" /></a></div>
    <ul class="middleNav">
        <li class="iMes"><a href="#" title=""><span>Support tickets</span></a><span class="numberMiddle">9</span></li>
        <li class="iStat"><a href="#" title=""><span>Statistics</span></a></li>
        <li class="iUser"><a href="#" title=""><span>User list</span></a></li>
        <li class="iOrders"><a href="#" title=""><span>Billing panel</span></a></li>
    </ul>
</div>

<!-- Main wrapper -->
<div class="wrapper">

    <!-- Left navigation -->
    <div class="leftNav">
        <ul id="menu">
            <li class="dash"><a href="index.html" title=""><span>Dashboard</span></a></li>
            <li class="graphs"><a href="charts.html" title=""><span>Graphs and charts</span></a></li>
            <li class="forms"><a href="form_elements.html" title="" class="active"><span>Form elements</span></a></li>
            <li class="login"><a href="ui_elements.html" title=""><span>Interface elements</span></a></li>
            <li class="typo"><a href="typo.html" title=""><span>Typography</span></a></li>
            <li class="tables"><a href="tables.html" title=""><span>Tables</span></a></li>
            <li class="cal"><a href="calendar.html" title=""><span>Calendar</span></a></li>
            <li class="gallery"><a href="gallery.html" title=""><span>Gallery</span></a></li>
            <li class="widgets"><a href="widgets.html" title=""><span>Widgets</span></a></li>
            <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><strong>6</strong></a>
                <ul class="sub">
                    <li><a href="403.html" title="">403 page</a></li>
                    <li><a href="404.html" title="">404 page</a></li>
                    <li><a href="405.html" title="">405 page</a></li>
                    <li><a href="500.html" title="">500 page</a></li>
                    <li><a href="503.html" title="">503 page</a></li>
                    <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                </ul>
            </li>
            <li class="pic"><a href="icons.html" title=""><span>Buttons and icons</span></a></li>
            <li class="contacts"><a href="contacts.html" title=""><span>Contact list</span></a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content" id="container">
        <div class="title"><h5>Form elements</h5></div>

        <!-- Statistics -->
        <div class="stats">
            <ul>
                <li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>

                <li><a href="#" class="count grey" title="">520</a><span>pending orders</span></li>
                <li><a href="#" class="count grey" title="">14</a><span>new opened tickets</span></li>
                <li class="last"><a href="#" class="count grey" title="">48</a><span>new user registrations</span></li>
            </ul>
        </div>

        <!-- Form begins -->
        <form action="" class="mainForm">

            <!-- Input text fields -->
            <fieldset>
                <div class="widget first">
                    <div class="head"><h5 class="iList">Text fields</h5></div>
                    <div class="rowElem noborder"><label>Usual input text:</label><div class="formRight"><input type="text" name="inputtext"/></div></div>
                    <div class="rowElem"><label>Input password:</label><div class="formRight"><input type="password" /></div></div>
                    <div class="rowElem"><label>Input with placeholder:</label><div class="formRight"><input type="text" name="inputtext" placeholder="enter your placeholder text here"/></div></div>
                    <div class="rowElem"><label>Input with autofocus:</label><div class="formRight"><input type="text" name="inputtext" class="autoF"/></div></div>
                    <div class="rowElem"><label>Read only field:</label><div class="formRight"><input type="text" readonly="readonly" value="Read only text goes here" name="inputtext"/></div></div>
                    <div class="rowElem"><label>Input with tooltip:</label><div class="formRight"><input type="text" name="inputtext" class="rightDir" title="Cool, huh?" /></div></div>
                    <div class="rowElem"><label>Disabled input field:</label><div class="formRight"><input type="text" disabled="disabled" value="Disabled field" name="inputtext"/></div></div>
                    <div class="rowElem"><label>With predefined value:</label><div class="formRight"><input type="text" value="http://" name="inputtext"/></div></div>
                    <div class="rowElem"><label>With max length:</label><div class="formRight"><input type="text" maxlength="20" placeholder="max 20 characters here" name="inputtext"/></div></div>

                    <div class="rowElem"><label>Usual textarea:</label><div class="formRight"><textarea rows="8" cols="" name="textarea"></textarea></div></div>
                    <div class="rowElem"><label>Autogrowing textarea:</label><div class="formRight"><textarea rows="8" cols="" class="auto" name="textarea"></textarea></div></div>
                    <div class="rowElem"><label>With limit:</label><div class="formRight"><textarea rows="8" cols="" class="auto limit" name="textarea"></textarea></div></div>
                    <div class="submitForm"><input type="submit" value="Submit form" class="greyishBtn" /></div>

                </div>
            </fieldset>

            <!-- Filtering data rows -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iView">Filtering data rows</h5></div>
                    <div class="rowElem noborder">
                        <label>Simple data row</label>
                        <div class="formRight moreFields">
                            <ul class="rowData">
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="test" maxlength="6" /></li>
                                <li><span>All characters</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Numbers only</label>
                        <div class="formRight moreFields onlyNums">
                            <ul>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li><span>class="onlyNums"</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Letters only</label>
                        <div class="formRight moreFields onlyText">
                            <ul>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li><span>class="onlyText"</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Alpha only</label>
                        <div class="formRight moreFields onlyAlpha">
                            <ul>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li><span>class="onlyAlpha"</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Regular expressions</label>
                        <div class="formRight moreFields onlyRegex">
                            <ul>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="question" maxlength="6" /></li>
                                <li><span>class="onlyRegex"</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Uppercase converting</label>
                        <div class="formRight moreFields allUpper">
                            <ul>
                                <li><input type="text" name="up1" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="up2" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="up3" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="up4" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="up5" maxlength="6" /></li>
                                <li class="sep">-</li>
                                <li><input type="text" name="up6" maxlength="6" /></li>
                                <li><span>class="allUpper"</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Fields with masked input -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iView">Masked input fields</h5></div>
                    <div class="rowElem noborder">
                        <label>Date:</label>
                        <div class="formRight"><input type="text" data-mask="99/99/9999"><span class="formNote">99/99/9999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Phone:</label>
                        <div class="formRight"><input type="text" data-mask="(999) 999-9999"><span class="formNote">(999) 999-9999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Phone + Ext:</label>
                        <div class="formRight"><input type="text" data-mask="(999) 999-9999 / x99999"><span class="formNote">(999) 999-9999? x99999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Int'l Phone:</label>
                        <div class="formRight"><input type="text" data-mask="+39 999 999 999"><span class="formNote">+33 999 999 999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Tax ID:</label>
                        <div class="formRight"><input type="text" data-mask="99-9999999"><span class="formNote">99-9999999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>SSN:</label>
                        <div class="formRight"><input type="text" data-mask="999-99-9999"><span class="formNote">999-99-9999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Product Key:</label>
                        <div class="formRight"><input type="text" data-mask="a*-999-a999"><span class="formNote">a*-999-a999</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Purchase Order:</label>
                        <div class="formRight"><input type="text" data-mask="aaa-999-***"><span class="formNote">aaa-999-***</span></div>
                    </div>
                    <div class="rowElem">
                        <label>Percent:</label>
                        <div class="formRight"><input type="text" data-mask="99%"><span class="formNote">99%</span></div>
                    </div>
                </div>
            </fieldset>

            <!-- Dropdowns and selects -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iCoverflow">Drowpdowns and selects</h5></div>

                    <div class="rowElem noborder">
                        <label>Styled dropdown:</label>
                        <div class="formRight">
                            <select name="select2" class="styled">
                                <option value="opt1">Usual select box</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Fixed select:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Liquid select:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select-liquid" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Full width select:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select-full" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Select with optgroups:</label>
                        <div class="formRight">
                            <select class="select">
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
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Select with search:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select-search" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Disabled select:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select select-disabled" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Clear results:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="clear-results" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon" selected>Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Disabled select:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="select select-disabled" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Select with minimum:</label>
                        <div class="formRight">
                            <select data-placeholder="Choose a Country..." class="minimum-select" tabindex="2">
                                <option value=""></option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Multiple with search:</label>
                        <div class="formRight">
                            <select data-placeholder="Your Favorite Football Team" class="select-multiple" multiple="multiple" tabindex="2">
                                <optgroup label="NFC EAST">
                                    <option>Dallas Cowboys</option>
                                    <option selected="selected">New York Giants</option>
                                    <option>Philadelphia Eagles</option>
                                    <option>Washington Redskins</option>
                                </optgroup>
                                <optgroup label="NFC NORTH">
                                    <option selected="selected">Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                </optgroup>
                                <optgroup label="NFC SOUTH">
                                    <option selected="selected">Atlanta Falcons</option>
                                    <option>Carolina Panthers</option>
                                    <option>New Orleans Saints</option>
                                    <option>Tampa Bay Buccaneers</option>
                                </optgroup>
                                <optgroup label="NFC WEST">
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                </optgroup>
                                <optgroup label="AFC EAST">
                                    <option>Buffalo Bills</option>
                                    <option>Miami Dolphins</option>
                                    <option>New England Patriots</option>
                                    <option>New York Jets</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>With maximum input:</label>
                        <div class="formRight">
                            <select data-placeholder="Your Favorite Football Team" multiple="multiple" tabindex="2" class="maximum-select">
                                <option value=""></option>
                                <optgroup label="NFC EAST">
                                    <option>Dallas Cowboys</option>
                                    <option>New York Giants</option>
                                    <option>Philadelphia Eagles</option>
                                    <option>Washington Redskins</option>
                                </optgroup>
                                <optgroup label="NFC NORTH">
                                    <option>Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                </optgroup>
                                <optgroup label="NFC SOUTH">
                                    <option>Atlanta Falcons</option>
                                    <option>Carolina Panthers</option>
                                    <option>New Orleans Saints</option>
                                    <option>Tampa Bay Buccaneers</option>
                                </optgroup>
                                <optgroup label="NFC WEST">
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                </optgroup>
                                <optgroup label="AFC EAST">
                                    <option selected="selected">Buffalo Bills</option>
                                    <option>Miami Dolphins</option>
                                    <option>New England Patriots</option>
                                    <option>New York Jets</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Minimum characters:</label>
                        <div class="formRight">
                            <select data-placeholder="Your Favorite Football Team" multiple="multiple" tabindex="2" class="minimum-multiple-select">
                                <option value=""></option>
                                <optgroup label="NFC EAST">
                                    <option>Dallas Cowboys</option>
                                    <option>New York Giants</option>
                                    <option selected="selected">Philadelphia Eagles</option>
                                    <option selected="selected">Washington Redskins</option>
                                </optgroup>
                                <optgroup label="NFC NORTH">
                                    <option>Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                </optgroup>
                                <optgroup label="NFC SOUTH">
                                    <option>Atlanta Falcons</option>
                                    <option>Carolina Panthers</option>
                                    <option>New Orleans Saints</option>
                                    <option>Tampa Bay Buccaneers</option>
                                </optgroup>
                                <optgroup label="NFC WEST">
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                </optgroup>
                                <optgroup label="AFC EAST">
                                    <option>Buffalo Bills</option>
                                    <option>Miami Dolphins</option>
                                    <option>New England Patriots</option>
                                    <option>New York Jets</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Disabled state:</label>
                        <div class="formRight">
                            <select data-placeholder="Your Favorite Football Team" class="select select-disabled" multiple="multiple" tabindex="2">
                                <option value=""></option>
                                <optgroup label="NFC EAST">
                                    <option>Dallas Cowboys</option>
                                    <option>New York Giants</option>
                                    <option selected="selected">Philadelphia Eagles</option>
                                    <option selected="selected">Washington Redskins</option>
                                </optgroup>
                                <optgroup label="NFC NORTH">
                                    <option>Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Multiple select:</label>
                        <div class="formRight">
                            <select multiple="multiple" class="multiple" title="Click to Select a City">
                                <option selected="selected">Amsterdam</option>
                                <option selected="selected">Atlanta</option>
                                <option>Baltimore</option>
                                <option>Boston</option>
                                <option>Buenos Aires</option>
                                <option>Calgary</option>
                                <option selected="selected">Chicago</option>
                                <option>Denver</option>
                                <option>Dubai</option>
                                <option>Frankfurt</option>
                                <option>Hong Kong</option>
                                <option>Honolulu</option>
                                <option>Houston</option>
                                <option>Kuala Lumpur</option>
                                <option>London</option>
                                <option>Los Angeles</option>
                                <option>Melbourne</option>
                                <option>Mexico City</option>
                                <option>Miami</option>
                                <option>Minneapolis</option>
                                <option>Montreal</option>
                                <option>New York City</option>
                                <option>Paris</option>
                                <option>Philadelphia</option>
                                <option>Rotterdam</option>
                                <option>San Diego</option>
                                <option>San Francisco</option>
                                <option>Sao Paulo</option>
                                <option>Seattle</option>
                                <option>Seoul</option>
                                <option>Shanghai</option>
                                <option>Singapore</option>
                                <option>Sydney</option>
                                <option>Tokyo</option>
                                <option>Toronto</option>
                                <option>Vancouver</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem dualBoxes">
                        <div class="floatleft w40">
                            <input type="text" id="box1Filter" class="boxFilter" placeholder="Filter entries..." /><button type="button" id="box1Clear" class="fltr">x</button><br />
                            <select id="box1View" multiple="multiple" class="multiple" style="height:300px;">
                                <option value="501649">2008-2009 "Mini" Baja</option>
                                <option value="501497" selected="selected">AAPA - Asian American Psychological Association</option>
                                <option value="501053">Academy of Film Geeks</option>
                                <option value="500001">Accounting Association</option>
                                <option value="501227" selected="selected">ACLU</option>
                                <option value="501610" selected="selected">Active Minds</option>
                                <option value="501514">Activism with A Reel Edge (A.W.A.R.E.)</option>
                                <option value="501656">Adopt a Grandparent Program</option>
                                <option value="501050">Africa Awareness Student Organization</option>
                                <option value="501075">African Diasporic Cultural RC Interns</option>
                                <option value="501493">Agape</option>
                                <option value="501562" selected="selected">AGE-Alliance for Graduate Excellence</option>
                                <option value="500676">AICHE (American Inst of Chemical Engineers)</option>
                                <option value="501460">AIDS Sensitivity Awareness Project ASAP</option>
                                <option value="500004">Aikido Club</option>
                                <option value="500336">Akanke</option>
                            </select>
                            <br/>
                            <span id="box1Counter" class="countLabel"></span>
                            <div class="displayNone"><select id="box1Storage"></select></div>
                        </div>

                        <div class="dualControl">
                            <button id="to2" type="button" class="basicBtn dualBtn mr5 mb15">&nbsp;&gt;&nbsp;</button>
                            <button id="allTo2" type="button" class="basicBtn dualBtn">&nbsp;&gt;&gt;&nbsp;</button><br />
                            <button id="to1" type="button" class="basicBtn dualBtn mr5">&nbsp;&lt;&nbsp;</button>
                            <button id="allTo1" type="button" class="basicBtn dualBtn">&nbsp;&lt;&lt;&nbsp;</button>
                        </div>

                        <div class="floatright w40">
                            <input type="text" id="box2Filter" class="boxFilter" placeholder="Filter entries..." /><button type="button" id="box2Clear" class="fltr">x</button><br />
                            <select id="box2View" multiple="multiple" class="multiple" style="height:300px;"></select><br/>
                            <span id="box2Counter" class="countLabel"></span>

                            <div class="displayNone"><select id="box2Storage"></select></div>
                        </div>
                        <div class="fix"></div>
                    </div>

                    <div class="rowElem"><label>Simple numbers input:</label><div class="formRight"><input type="text" id="spinner-default" value="10" /></div></div>
                    <div class="rowElem">
                        <label>Decimal:</label>
                        <div class="formRight">
                            <input type="text" id="spinner-decimal" name="spinner-decimal" value="5.06" />
                            <select id="culture" class="styled">
                                <option value="en-EN" selected="selected">English</option>
                                <option value="de-DE">German</option>
                                <option value="ja-JP">Japanese</option>
                            </select>
                        </div>
                    </div>
                    <div class="rowElem">
                        <label>Currency:</label>
                        <div class="formRight">
                            <input type="text" id="spinner-currency" name="spinner-currency" value="5" />
                            <select id="currency" name="currency" class="styled">
                                <option value="en-US">US $</option>
                                <option value="de-DE">EUR €</option>
                                <option value="ja-JP">YEN ¥</option>
                            </select>
                        </div>
                    </div>

                    <div class="rowElem"><label>Overflow:</label><div class="formRight"><input type="text" id="spinner-overflow" name="spinner-overflow" value="" /></div></div>
                    <div class="rowElem">
                        <label>Time spinner:</label>
                        <div class="formRight">
                            <input type="text" id="spinner-time" name="spinner-time" value="08:30 PM" />
                            <select id="culture-time" class="styled">
                                <option value="en-EN" selected="selected">English</option>
                                <option value="de-DE">German</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Checkboxes and radios -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iRecord">Checkbox, radio, file input</h5></div>
                    <div class="rowElem noborder">
                        <label>Checkbox: </label>
                        <div class="formRight">
                            <input type="checkbox" id="check1" name="chbox" checked="checked" /><label for="check1">Checkbox checked</label>
                            <input type="checkbox" id="check2" name="chbox" /><label for="check2">Checkbox</label>
                            <input type="checkbox" id="check3" disabled="disabled" name="chbox" /><label class="itemDisabled">Disabled</label>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Radio :</label>
                        <div class="formRight">
                            <input type="radio" id="radio1" name="question1" checked="checked" /><label for="radio1">Selected radio</label>
                            <input type="radio" id="radio2" name="question1" /><label for="radio2">Normal state</label>
                            <input type="radio" name="question" disabled="disabled" /><label class="itemDisabled">Disabled</label>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Usual file input :</label>
                        <div class="formRight">
                            <input type="file" class="fileInput" id="fileInput" />
                        </div>
                    </div>

                </div>
            </fieldset>

            <!-- File upload -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iUpload">File upload</h5></div>
                    <div id="uploader">You browser doesn't have HTML 4 support.</div>
                </div>
            </fieldset>

            <!-- WYSIWYG editor -->
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iPencil">WYSIWYG editor</h5></div>
                    <textarea id="editor" name="editor" rows="10" cols="16" style="float: left;">Some cool stuff here</textarea>
                </div>
            </fieldset>
        </form>

        <!-- Form with validation -->
        <form action="" id="valid" class="mainForm">
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iLocked2">Popup validation</h5></div>
                    <div class="rowElem noborder">
                        <label>Usual required field:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" class="validate[required]" name="req" id="req" data-prompt-position="topRight:170" />
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Enter password:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="password" class="validate[required]" name="password" id="password" />
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Repeat password:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="password" class="validate[required,equals[password]]" name="password2" id="password2" />
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Minimum field size:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" class="validate[required,minSize[6]]" name="minValid" id="minValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Maximum field size:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" class="validate[required,maxSize[6]]" value="0123456789" name="maxValid" id="maxValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>integer >= -5:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="-10" class="validate[required,custom[integer],min[-5]]" name="intValid" id="intValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Maximum value:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="55" class="validate[required,custom[integer],max[50]]" name="maxfieldValid" id="maxfieldValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Only letters:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="this is an invalid char '.'" class="validate[required,custom[onlyLetterSp]]" name="lettersValid" id="lettersValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Only numbers and space:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="10.1" class="validate[required,custom[onlyNumberSp]]" name="numsValid" id="numsValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Only [0-9a-zA-Z]:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="too many spaces obviously" class="validate[required,custom[onlyLetterNumber]]" name="regexValid" id="regexValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>IP address:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="192.168.3." class="validate[required,custom[ipv4]]" name="ipValid" id="ipValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Email address:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="" class="validate[required,custom[email]]" name="emailValid" id="emailValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Date validation:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="2009/06/30" class="validate[custom[date],past[2010/01/01]]" name="dateValid" id="dateValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Select elements:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="floatleft">
                                <select name="selectReq" id="selectReq" class="styled validate[required]" data-prompt-position="topRight:-92" >
                                    <option value="">Usual select box</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Date format:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" value="2011-01-" class="validate[custom[date],future[NOW]]" name="dateformatValid" id="dateformatValid"/>
                        </div>
                    </div>

                    <div class="rowElem">
                        <label>Required textarea:<span class="req">*</span></label>
                        <div class="formRight">
                            <textarea rows="8" cols="" name="textarea" class="validate[required]" id="textareaValid"></textarea>
                        </div>
                    </div>

                    <div class="submitForm"><input type="submit" value="Submit form" class="greyishBtn" /></div>

                </div>
            </fieldset>
        </form>

        <!-- Validation form -->
        <form id="usualValidate" class="mainForm" method="post" action="">
            <fieldset>
                <div class="widget">
                    <div class="head"><h5 class="iLocked">Usual form validation</h5></div>
                    <div class="rowElem noborder">
                        <label>Usual field:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="firstname" id="firstname"/></div>
                    </div>
                    <div class="rowElem">
                        <label>With minimum chars:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="minChars" id="minChars"/></div>
                    </div>
                    <div class="rowElem">
                        <label>With maximum chars:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="maxChars" id="maxChars"/></div>
                    </div>
                    <div class="rowElem">
                        <label>With minimum num:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="mini" id="mini"/></div>
                    </div>
                    <div class="rowElem">
                        <label>With maximum num:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="maxi" id="maxi"/></div>
                    </div>
                    <div class="rowElem">
                        <label>With range:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="range" id="range"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Email field:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="emailField" id="emailField"/></div>
                    </div>
                    <div class="rowElem">
                        <label>URL field:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="urlField" id="urlField"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Date field:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="dateField" id="dateField"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Digits only:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="digitsOnly" id="digitsOnly"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Custom error message:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="customMessage" id="customMessage"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Enter password:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="enterPass" id="enterPass"/></div>
                    </div>
                    <div class="rowElem">
                        <label>Checkbox:<span class="req">*</span></label>
                        <div class="formRight"><input type="checkbox" id="agree" name="agree" class="required" /><label for="agree">Accept terms?</label></div>
                    </div>
                    <div class="rowElem">
                        <label>Repeat password:<span class="req">*</span></label>
                        <div class="formRight"><input type="text" class="required" name="repeatPass" id="repeatPass"/></div>
                    </div>
                    <div class="submitForm"><input type="submit" value="submit" class="redBtn" /></div>
                </div>

            </fieldset>
        </form>

    </div>
</div>

<!-- Footer -->
<div id="footer">
    <div class="wrapper">
        <span>&copy; Copyright 2011. All rights reserved. It's Brain admin theme by <a href="#" title="">Eugene Kopyov</a></span>
    </div>
</div>

</body>
</html>
