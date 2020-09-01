<div id="styleSelector">

    <div class="selector-toggle"><a href="javascript:void(0)"></a></div>
    <ul>
        <li>
            <p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p><span class="text-muted">Live customizer with tons of options</span>
        </li>
        <li>
            <p class="selector-title">Main layouts</p>
        </li>
        <li>
            <div class="theme-color"><a href="#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a><a href="#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a></div>
        </li>
    </ul>
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);">
        <div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);">
            <ul class="nav nav-tabs  tabs" role="tablist">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-layout" role="tab" aria-expanded="false">Layouts</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-sidebar-setting" role="tab" aria-expanded="true">Sidebar Settings</a></li>
            </ul>
            <div class="tab-content tabs">
                <div class="tab-pane" id="sel-layout" role="tabpanel" aria-expanded="false">
                    <ul>
                        <li class="theme-option">
                            <div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span></label></div>
                        </li>
                        <li class="theme-option">
                            <div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="header-position" name="header-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span></label></div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane active" id="sel-sidebar-setting" role="tabpanel" aria-expanded="true">
                    <ul>
                        <li class="theme-option">
                            <p class="sub-title drp-title">Menu Type</p>
                            <div class="form-radio" id="menu-effect">
                                <div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon"><label><input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true"><i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span></label></div>
                                <div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon"><label><input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)"><i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span></label></div>
                            </div>
                        </li>
                        <!-- <li class="theme-option">
                            <p class="sub-title drp-title">SideBar Effect</p><select id="vertical-menu-effect" class="form-control minimal">
                                <option name="vertical-menu-effect" value="shrink">shrink</option>
                                <option name="vertical-menu-effect" value="overlay">overlay</option>
                                <option name="vertical-menu-effect" value="push">Push</option>
                            </select>
                        </li>
                        <li class="theme-option">
                            <p class="sub-title drp-title">Hide/Show Border</p><select id="vertical-border-style" class="form-control minimal">
                                <option name="vertical-border-style" value="solid">Style 1</option>
                                <option name="vertical-border-style" value="dotted">Style 2</option>
                                <option name="vertical-border-style" value="dashed">Style 3</option>
                                <option name="vertical-border-style" value="none">No Border</option>
                            </select>
                        </li>
                        <li class="theme-option">
                            <p class="sub-title drp-title">Drop-Down Icon</p><select id="vertical-dropdown-icon" class="form-control minimal">
                                <option name="vertical-dropdown-icon" value="style1">Style 1</option>
                                <option name="vertical-dropdown-icon" value="style2">style 2</option>
                                <option name="vertical-dropdown-icon" value="style3">style 3</option>
                            </select>
                        </li>
                        <li class="theme-option">
                            <p class="sub-title drp-title">Sub Menu Drop-down Icon</p><select id="vertical-subitem-icon" class="form-control minimal">
                                <option name="vertical-subitem-icon" value="style1">Style 1</option>
                                <option name="vertical-subitem-icon" value="style2">style 2</option>
                                <option name="vertical-subitem-icon" value="style3">style 3</option>
                                <option name="vertical-subitem-icon" value="style4">style 4</option>
                                <option name="vertical-subitem-icon" value="style5">style 5</option>
                                <option name="vertical-subitem-icon" value="style6">style 6</option>
                            </select>
                        </li> -->
                    </ul>
                </div>
                <!-- <ul>
                    <li>
                        <p class="selector-title">Header Brand color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color"><a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a></div>
                    </li>
                    <li>
                        <p class="selector-title">Header color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color"><a href="#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a></div>
                    </li>
                    <li>
                        <p class="selector-title">Active link color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color"><a href="#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a></div>
                    </li>
                    <li>
                        <p class="selector-title">Menu Caption Color</p>
                    </li>
                    <li class="theme-option">
                        <div class="theme-color"><a href="#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a></div>
                    </li>
                </ul> -->
            </div>
        </div>
        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 41.5867px;"></div>
        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>

</html>