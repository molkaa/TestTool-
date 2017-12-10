<?php

/* @TSAdmin/vector_maps.html */
class __TwigTemplate_173fa494b9586147dcd41c00b6d6d795fb035cd36cf71d0a58fe65e2730242a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c15cfdd995fe1792bcce586a40abf023f19fcca7378bfb2c857c706aa91781 = $this->env->getExtension("native_profiler");
        $__internal_55c15cfdd995fe1792bcce586a40abf023f19fcca7378bfb2c857c706aa91781->enter($__internal_55c15cfdd995fe1792bcce586a40abf023f19fcca7378bfb2c857c706aa91781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/vector_maps.html"));

        // line 1
        echo "<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Fides Admin</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

        <!-- Favicons -->

        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/images/icons/apple-touch-icon-144-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/images/icons/apple-touch-icon-114-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/images/icons/apple-touch-icon-72-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"assets/images/icons/apple-touch-icon-57-precomposed.png\">
        <link rel=\"shortcut icon\" href=\"assets/images/icons/favicon.png\">

        <!--[if lt IE 9]>
          <script src=\"assets/js/minified/core/html5shiv.min.js\"></script>
          <script src=\"assets/js/minified/core/respond.min.js\"></script>
        <![endif]-->

        <!-- Fides Admin CSS Core -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/minified/aui-production.min.css\">

        <!-- Theme UI -->

        <link id=\"layout-theme\" rel=\"stylesheet\" type=\"text/css\" href=\"assets/themes/minified/fides/color-schemes/dark-blue.min.css\">

        <!-- Fides Admin Responsive -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/themes/minified/fides/common.min.css\">
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../_assets/themes/fides/common.css\"> -->

        <link id=\"theme-animations\" rel=\"stylesheet\" type=\"text/css\" href=\"assets/themes/minified/fides/animations.min.css\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/themes/minified/fides/responsive.min.css\">

        <!-- Fides Admin JS -->

        <script type=\"text/javascript\" src=\"assets/js/minified/aui-production.min.js\"></script>

        <script type=\"text/javascript\" src=\"assets/js/minified/core/raphael.min.js\"></script>
        <script type=\"text/javascript\" src=\"assets/js/minified/widgets/charts-justgage.min.js\"></script>

    </head>
    <body>
        

        <div id=\"loading\" class=\"ui-front loader ui-widget-overlay bg-white opacity-100\">
            <img src=\"assets/images/loader-dark.gif\" alt=\"\">
        </div>

        <div id=\"page-wrapper\" class=\"demo-example\">

            <div class=\"theme-customizer\">
                <a href=\"javascript:;\" class=\"change-theme-btn\" title=\"Change theme\">
                    <i class=\"glyph-icon icon-cog\"></i>
                </a>
                <div class=\"theme-wrapper\">

                    <div class=\"popover-title\">Color schemes</div>
                    <div class=\"pad10A clearfix change-layout-theme\">
                        <p class=\"font-gray-dark font-size-11 pad0B\">More color schemes will be available soon!</p>
                        <div class=\"divider mrg10T mrg10B\"></div>
                        <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-blue\" title=\"\">
                            <span style=\"background: #2381E9;\"></span>
                        </a>
<!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-blue\" title=\"\">
                            <span style=\"background: #2381E9;\"></span>
                        </a> -->
                        <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-blue\" title=\"D\">
                            <span style=\"background: #78CE12;\"></span>
                        </a>
<!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-blue\" title=\"D\">
                            <span style=\"background: #78CE12;\"></span>
                        </a> -->
                        <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-orange\" title=\"\">
                            <span style=\"background: #FF6041;\"></span>
                        </a>
<!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-orange\" title=\"\">
                            <span style=\"background: #FF6041;\"></span>
                        </a> -->
                        <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"inverse-blue\" title=\"\">
                            <span style=\"background: #20242A;\"></span>
                        </a>
                        <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-gray\" title=\"\">
                            <span style=\"background: #646464;\"></span>
                        </a>
                    </div>
                    <div class=\"popover-title\">Layout options</div>
                    <div class=\"pad10A clearfix\">
                        <a class=\"fluid-layout-btn hidden primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Full width layout</span></a>
                        <a class=\"boxed-layout-btn primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Boxed layout</span></a>

                        <a class=\"enable-animations hidden primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Enable animations</span></a>
                        <a class=\"disable-animations primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Disable animations</span></a>
                    </div>
                    <div class=\"popover-title\">Boxed layout backgrounds</div>
                    <div class=\"pad10A clearfix\">
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#000\" style=\"background: #000;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#333\" style=\"background: #333;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#666\" style=\"background: #666;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#888\" style=\"background: #888;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#383d43\" style=\"background: #383d43;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#fafafa\" style=\"background: #fafafa; border: #ccc solid 1px;\" title=\"\"></a>
                        <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#fff\" style=\"background: #fff; border: #eee solid 1px;\" title=\"\"></a>
                    </div>

                </div>
            </div>

            <div id=\"page-header\" class=\"clearfix\">
                <div id=\"header-logo\">
                    <a href=\"javascript:;\" class=\"tooltip-button\" data-placement=\"bottom\" title=\"Close sidebar\" id=\"close-sidebar\">
                        <i class=\"glyph-icon icon-caret-left\"></i>
                    </a>
                    <a href=\"javascript:;\" class=\"tooltip-button hidden\" data-placement=\"bottom\" title=\"Open sidebar\" id=\"rm-close-sidebar\">
                        <i class=\"glyph-icon icon-caret-right\"></i>
                    </a>
                    <a href=\"javascript:;\" class=\"tooltip-button hidden\" title=\"Navigation Menu\" id=\"responsive-open-menu\">
                        <i class=\"glyph-icon icon-align-justify\"></i>
                    </a>
                    Aymen_Messaoudi <i class=\"opacity-80\"></i>
                </div>
                <div class=\"hide\" id=\"black-modal-60\" title=\"Modal window example\">
                    <div class=\"pad20A\">

                        <div class=\"infobox notice-bg\">
                            <div class=\"bg-azure large btn info-icon\">
                                <i class=\"glyph-icon icon-bullhorn\"></i>
                            </div>
                            <h4 class=\"infobox-title\">Modal windows</h4>
                            <p>Thanks to the solid modular Fides Admin arhitecture, modal windows customizations are very flexible and easy to apply.</p>
                        </div>

                        <h4 class=\"heading-1 mrg20T clearfix\">
                            <div class=\"heading-content\" style=\"width: auto;\">
                                Icons
                                <small>
                                    All icons across the Fides Admin Framework use FontAwesome icons.
                                </small>
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"divider\"></div>
                        </h4>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-compass\" href=\"../icon/compass\"><i class=\"glyph-icon icon-compass\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-collapse\" href=\"../icon/collapse\"><i class=\"glyph-icon icon-collapse\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-collapse-top\" href=\"../icon/collapse-top\"><i class=\"glyph-icon icon-collapse-top\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-expand\" href=\"../icon/expand\"><i class=\"glyph-icon icon-expand\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-eur\" href=\"../icon/eur\"><i class=\"glyph-icon icon-eur\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-euro\" href=\"../icon/eur\"><i class=\"glyph-icon icon-euro\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-gbp\" href=\"javascript:;\"><i class=\"glyph-icon icon-gbp\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-usd\" href=\"javascript:;\"><i class=\"glyph-icon icon-usd\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-dollar\" href=\"javascript:;\"><i class=\"glyph-icon icon-dollar\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-inr\" href=\"javascript:;\"><i class=\"glyph-icon icon-inr\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-rupee\" href=\"javascript:;\"><i class=\"glyph-icon icon-rupee\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-jpy\" href=\"javascript:;\"><i class=\"glyph-icon icon-jpy\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-yen\" href=\"javascript:;\"><i class=\"glyph-icon icon-yen\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-cny\" href=\"javascript:;\"><i class=\"glyph-icon icon-cny\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-renminbi\" href=\"javascript:;\"><i class=\"glyph-icon icon-renminbi\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-krw\" href=\"javascript:;\"><i class=\"glyph-icon icon-krw\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-won\" href=\"javascript:;\"><i class=\"glyph-icon icon-won\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-btc\" href=\"javascript:;\"><i class=\"glyph-icon icon-btc\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-bitcoin\" href=\"javascript:;\"><i class=\"glyph-icon icon-bitcoin\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-file\" href=\"javascript:;\"><i class=\"glyph-icon icon-file\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-file-text\" href=\"javascript:;\"><i class=\"glyph-icon icon-file-text\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-alphabet\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-alphabet\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-alphabet-al\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-alphabet-alt\"></i>t</a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-attributes\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-attributes\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-attribu\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-attributes-alt\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-order\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-order\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-sort-by-order-alt\" href=\"javascript:;\"><i class=\"glyph-icon icon-sort-by-order-alt\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-thumbs-up\" href=\"javascript:;\"><i class=\"glyph-icon icon-thumbs-up\"></i></a>

                        <a class=\"btn medium radius-all-4 mrg5A ui-state-default tooltip-button\" title=\"icon-thumbs-down\" href=\"javascript:;\"><i class=\"glyph-icon icon-thumbs-down\"></i></a>

                    </div>
                </div>

                <div class=\"hide\" id=\"white-modal-80\" title=\"Dialog with tabs\">
                    <div class=\"tabs pad15A remove-border opacity-80\">
                        <ul class=\"opacity-80\">
                            <li><a href=\"#example-tabs-1\">First</a></li>
                            <li><a href=\"#example-tabs-2\">Second</a></li>
                            <li><a href=\"#example-tabs-3\">Third</a></li>
                        </ul>
                        <div id=\"example-tabs-1\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                        <div id=\"example-tabs-2\">
                            <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                        <div id=\"example-tabs-3\">
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                    </div>
                    <div class=\"pad10A\">
                        <div class=\"infobox success-bg radius-all-4\">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>
                        </div>
                    </div>
                    <div class=\"ui-dialog-buttonpane clearfix\">

                        <a href=\"dropdown_menus.html\" class=\"btn medium float-left bg-azure\">
                            <span class=\"button-content text-transform-upr font-size-11\">Dropdown menus</span>
                        </a>
                        <div class=\"button-group float-right\">
                            <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                                <i class=\"glyph-icon icon-star\"></i>
                            </a>
                            <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                                <i class=\"glyph-icon icon-random\"></i>
                            </a>
                            <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                                <i class=\"glyph-icon icon-map-marker\"></i>
                            </a>
                        </div>
                        <a href=\"javascript:;\" class=\"medium btn primary-bg-alt float-right mrg10R tooltip-button\" data-placement=\"left\" title=\"Remove comment\">
                            <i class=\"glyph-icon icon-plus\"></i>
                        </a>

                    </div>
                </div>
                <div class=\"user-profile hidden-mobile\">
                    <a href=\"javascript:;\" title=\"\" id=\"open-left-menu\" class=\"updateEasyPieChart user-ico clearfix\">
                        <i class=\"glyph-icon icon-th-list\"></i>
                    </a>
                </div>
                <div class=\"user-profile dropdown\">
                    <a href=\"javascript:;\" title=\"\" class=\"user-ico clearfix\" data-toggle=\"dropdown\">
                        <img width=\"36\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                        <span>Horia Simon</span>
                        <i class=\"glyph-icon icon-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu float-right\">
                        <li>
                            <a href=\"javascript:;\" title=\"\">
                                <i class=\"glyph-icon icon-user mrg5R\"></i>
                                Account Details
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"\">
                                <i class=\"glyph-icon icon-cog mrg5R\"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"\">
                                <i class=\"glyph-icon icon-flag mrg5R\"></i>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"\">
                                <i class=\"glyph-icon icon-signout font-size-13 mrg5R\"></i>
                                <span class=\"font-bold\">Logout</span>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-submenu float-left\">
                            <a href=\"javascript:;\" data-toggle=\"dropdown\" title=\"\">
                                Dropdown menu
                            </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"javascript:;\" title=\"\">
                                            Submenu 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" title=\"\">
                                            Submenu 2
                                        </a>
                                    </li>
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"javascript:;\" title=\"\">
                                            Submenu 3
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li>
                                                <a href=\"javascript:;\" title=\"\">
                                                    Submenu 2-1
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" title=\"\">
                                                    Submenu 2-2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"\">
                                Another menu item
                            </a>
                        </li>

                    </ul>
                </div>
                <div class=\"dropdown dash-menu\">
                    <a href=\"javascript:;\" data-toggle=\"dropdown\" data-placement=\"left\" class=\"medium btn primary-bg float-right popover-button-header hidden-mobile mrg15R tooltip-button\" title=\"Example menu\">
                        <i class=\"glyph-icon icon-th\"></i>
                    </a>
                    <div class=\"dropdown-menu float-right\">
                        <div class=\"small-box\">
                            <div class=\"pad10A dashboard-buttons clearfix\">
                                <p class=\"font-gray-dark font-size-11 pad0B\">This menu type can be used in pages, not just popovers.</p>
                                <div class=\"divider mrg10T mrg10B\"></div>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-blue-alt\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-dashboard opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Dashboard</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-blue\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-tags opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Widgets</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-orange\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-sort-amount-asc opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Tables</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-orange\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-bar-chart-o opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Charts</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-purple\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-laptop opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Buttons</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-azure\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-code opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Panels</span>
                                </a>
                            </div>

                            <div class=\"bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A\">Dashboard menu</div>
                            <div class=\"pad10A dashboard-buttons clearfix\">
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border primary-bg\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-dashboard opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Dashboard</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border bg-red\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-tags opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Widgets</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border bg-purple\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-sort-amount-asc opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Tables</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border bg-azure\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-bar-chart-o opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Charts</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border bg-yellow\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-laptop opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Buttons</span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button remove-border bg-orange\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <i class=\"glyph-icon icon-code opacity-80 font-size-20\"></i>
                                    </span>
                                    <span class=\"button-content\">Panels</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"top-icon-bar\">
                    <div class=\"dropdown\">

                        <a data-toggle=\"dropdown\" href=\"javascript:;\" title=\"\">
                            <span class=\"badge badge-absolute primary-bg\">8</span>
                            <i class=\"glyph-icon icon-lightbulb-o\"></i>
                        </a>
                        <div class=\"dropdown-menu\">

                            <div class=\"small-box\">

                                <div class=\"popover-title\">Color schemes</div>
                                <div class=\"pad10A clearfix change-layout-theme\">
                                    <p class=\"font-gray-dark font-size-11 pad0B\">More color schemes will be available soon!</p>
                                    <div class=\"divider mrg10T mrg10B\"></div>
                                    <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-blue\" title=\"\">
                                        <span style=\"background: #2381E9;\"></span>
                                    </a>
            <!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-blue\" title=\"\">
                                        <span style=\"background: #2381E9;\"></span>
                                    </a> -->
                                    <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-blue\" title=\"D\">
                                        <span style=\"background: #78CE12;\"></span>
                                    </a>
            <!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-blue\" title=\"D\">
                                        <span style=\"background: #78CE12;\"></span>
                                    </a> -->
                                    <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-orange\" title=\"\">
                                        <span style=\"background: #FF6041;\"></span>
                                    </a>
            <!--                         <a href=\"javascript:;\" class=\"choose-theme opacity-30\" layout-theme=\"white-orange\" title=\"\">
                                        <span style=\"background: #FF6041;\"></span>
                                    </a> -->
                                    <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"inverse-blue\" title=\"\">
                                        <span style=\"background: #20242A;\"></span>
                                    </a>
                                    <a href=\"javascript:;\" class=\"choose-theme\" layout-theme=\"dark-gray\" title=\"\">
                                        <span style=\"background: #646464;\"></span>
                                    </a>
                                </div>
                                <div class=\"popover-title\">Layout options</div>
                                <div class=\"pad10A clearfix\">
                                    <a class=\"fluid-layout-btn hidden primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Full width layout</span></a>
                                    <a class=\"boxed-layout-btn primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Boxed layout</span></a>

                                    <a class=\"enable-animations hidden primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Enable animations</span></a>
                                    <a class=\"disable-animations primary-bg-alt medium btn\" href=\"javascript:;\" title=\"\"><span class=\"button-content\">Disable animations</span></a>
                                </div>
                                <div class=\"popover-title\">Boxed layout backgrounds</div>
                                <div class=\"pad10A clearfix\">
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#000\" style=\"background: #000;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#333\" style=\"background: #333;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#666\" style=\"background: #666;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#888\" style=\"background: #888;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#383d43\" style=\"background: #383d43;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#fafafa\" style=\"background: #fafafa; border: #ccc solid 1px;\" title=\"\"></a>
                                    <a href=\"javascript:;\" class=\"choose-bg\" boxed-bg=\"#fff\" style=\"background: #fff; border: #eee solid 1px;\" title=\"\"></a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class=\"dropdown\">

                        <a data-toggle=\"dropdown\" href=\"javascript:;\" title=\"\">
                            <span class=\"badge badge-absolute bg-orange\">4</span>
                            <i class=\"glyph-icon icon-envelope-o\"></i>
                        </a>
                        <div class=\"dropdown-menu\">

                            <div class=\"scrollable-content medium-box scrollable-small\">

                                <ul class=\"no-border messages-box\">
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <i class=\"glyph-icon icon-warning-sign font-red\"></i>
                                                <a href=\"javascript:;\" title=\"Message title\">Important message</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <i class=\"glyph-icon icon-tag font-blue\"></i>
                                                <a href=\"javascript:;\" title=\"Message title\">Some random email</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <a href=\"javascript:;\" class=\"font-orange\" title=\"Message title\">Another received message</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <i class=\"glyph-icon icon-warning-sign font-red\"></i>
                                                <a href=\"javascript:;\" title=\"Message title\">Important message</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <i class=\"glyph-icon icon-tag font-blue\"></i>
                                                <a href=\"javascript:;\" title=\"Message title\">Some random email</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class=\"messages-img\">
                                            <img width=\"32\" src=\"assets/images/gravatar.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"messages-content\">
                                            <div class=\"messages-title\">
                                                <a href=\"javascript:;\" class=\"font-orange\" title=\"Message title\">Another received message</a>
                                                <div class=\"messages-time\">
                                                    3 hr ago
                                                    <span class=\"glyph-icon icon-time\"></span>
                                                </div>
                                            </div>
                                            <div class=\"messages-text\">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                </ul>

                            </div>
                            <div class=\"pad10A button-pane button-pane-alt\">
                                <a href=\"messaging.html\" class=\"btn small float-left bg-white\">
                                    <span class=\"button-content text-transform-upr font-size-11\">All messages</span>
                                </a>
                                <div class=\"button-group float-right\">
                                    <a href=\"javascript:;\" class=\"btn small primary-bg\">
                                        <i class=\"glyph-icon icon-star\"></i>
                                    </a>
                                    <a href=\"javascript:;\" class=\"btn small primary-bg\">
                                        <i class=\"glyph-icon icon-random\"></i>
                                    </a>
                                    <a href=\"javascript:;\" class=\"btn small primary-bg\">
                                        <i class=\"glyph-icon icon-map-marker\"></i>
                                    </a>
                                </div>
                                <a href=\"javascript:;\" class=\"small btn bg-red float-right mrg10R tooltip-button\" data-placement=\"left\" title=\"Remove comment\">
                                    <i class=\"glyph-icon icon-remove\"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class=\"dropdown\">

                        <a data-toggle=\"dropdown\" href=\"javascript:;\" title=\"\">
                            <span class=\"badge badge-absolute primary-bg\">9</span>
                            <i class=\"glyph-icon icon-bell\"></i>
                        </a>
                        <div class=\"dropdown-menu\">

                            <div class=\"popover-title display-block clearfix form-row pad10A\">
                                <div class=\"form-input\">
                                    <div class=\"form-input-icon\">
                                        <i class=\"glyph-icon icon-search transparent\"></i>
                                        <input type=\"text\" placeholder=\"Search notifications...\" class=\"radius-all-100\" name=\"\" id=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"scrollable-content medium-box scrollable-small\">

                                <ul class=\"no-border notifications-box\">
                                    <li>
                                        <span class=\"btn bg-purple icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text\">This is an error notification</span>
                                        <div class=\"notification-time\">
                                            a few seconds ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class=\"btn bg-orange icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text\">This is a warning notification</span>
                                        <div class=\"notification-time\">
                                            <b>15</b> minutes ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class=\"primary-bg btn icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text font-blue font-bold\">A success message example.</span>
                                        <div class=\"notification-time\">
                                            <b>2 hours</b> ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class=\"btn bg-purple icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text\">This is an error notification</span>
                                        <div class=\"notification-time\">
                                            a few seconds ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class=\"btn bg-orange icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text\">This is a warning notification</span>
                                        <div class=\"notification-time\">
                                            <b>15</b> minutes ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class=\"primary-bg btn icon-notification glyph-icon icon-user\"></span>
                                        <span class=\"notification-text font-blue\">Alternate notification styling.</span>
                                        <div class=\"notification-time\">
                                            <b>2 hours</b> ago
                                            <span class=\"glyph-icon icon-time\"></span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class=\"pad10A button-pane button-pane-alt text-center\">
                                <a href=\"notifications.html\" class=\"btn medium primary-bg\">
                                    <span class=\"button-content\">View all notifications</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class=\"dropdown\">

                        <a data-toggle=\"dropdown\" href=\"javascript:;\" title=\"\">
                            <span class=\"badge badge-absolute bg-red\">2</span>
                            <i class=\"glyph-icon icon-tasks\"></i>
                        </a>
                        <div class=\"dropdown-menu\" id=\"progress-dropdown\">

                            <div class=\"scrollable-content small-box scrollable-small\">

                                <ul class=\"no-border progress-box\">
                                    <li>
                                        <div class=\"progress-title\">
                                            Finishing uploading files
                                            <b>23%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"23\">
                                            <div class=\"progressbar-value primary-bg\">
                                                <div class=\"progressbar-overlay\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            Roadmap progress
                                            <b>91%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"91\">
                                            <div class=\"progressbar-value primary-bg\">
                                                <div class=\"progressbar-overlay\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            Images upload
                                            <b>58%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"58\">
                                            <div class=\"progressbar-value primary-bg-alt\"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            WordPress migration
                                            <b>74%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"74\">
                                            <div class=\"progressbar-value bg-purple\"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            Agile development procedures
                                            <b>91%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"91\">
                                            <div class=\"progressbar-value primary-bg\">
                                                <div class=\"progressbar-overlay\"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            Systems integration
                                            <b>58%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"58\">
                                            <div class=\"progressbar-value primary-bg-alt\"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"progress-title\">
                                            Code optimizations
                                            <b>97%</b>
                                        </div>
                                        <div class=\"progressbar-small progressbar\" data-value=\"97\">
                                            <div class=\"progressbar-value bg-yellow\"></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class=\"pad10A button-pane button-pane-alt text-center\">
                                <a href=\"notifications.html\" class=\"btn medium font-normal primary-bg\">
                                    <span class=\"button-content\">View all</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- #page-header -->

            <div id=\"page-sidebar\" class=\"scrollable-content\">

                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"index.html\" title=\"Dashboard\">
                                <i class=\"glyph-icon icon-dashboard\"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Components\">
                                <i class=\"glyph-icon icon-code\"></i>
                                Components
                            </a>
                            <ul>
                                <li>
                                    <a href=\"dashboard_panels.html\" title=\"Dashboard panels\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Dashboard panels
                                    </a>
                                </li>
                                <li>
                                    <a href=\"tile_buttons.html\" title=\"Tile buttons\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Tile buttons
                                        <span class=\"label primary-bg float-right tooltip-button\" title=\"New feature added in v1.2\">NEW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"timeline.html\" title=\"Timeline\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Timeline
                                        <span class=\"label bg-orange float-right tooltip-button\" title=\"New feature added in v1.2\">NEW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"todo_list.html\" title=\"Todo list\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Todo list
                                        <span class=\"label bg-red float-right tooltip-button\" title=\"New feature added in v1.2\">NEW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"social_boxes.html\" title=\"Social boxes\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Social boxes
                                    </a>
                                </li>
                                <li>
                                    <a href=\"information_boxes.html\" title=\"Information boxes\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Information boxes
                                    </a>
                                </li>
                                <li>
                                    <a href=\"calendar.html\" title=\"Calendar\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href=\"other_components.html\" title=\"Other components\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Other components
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Pages\">
                                <i class=\"glyph-icon icon-folder-open\"></i>
                                Example Pages
                            </a>
                            <ul>
                                <li>
                                    <a href=\"grid.html\" title=\"Grid Layouts\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Grid Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href=\"helper_classes.html\" title=\"Helpers\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Helpers
                                    </a>
                                </li>
                                <li>
                                    <a href=\"login.html\" title=\"Login\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Login example 1
                                    </a>
                                </li>
                                <li>
                                    <a href=\"login-alt.html\" title=\"Login\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Login example 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Widgets\">
                                <i class=\"glyph-icon icon-tags\"></i>
                                Widgets &amp; Plugins
                            </a>
                            <ul>
                                <li>
                                    <a href=\"tabs.html\" title=\"Tabs\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href=\"accordions.html\" title=\"Accordions\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href=\"datepicker.html\" title=\"Datepicker\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Datepicker
                                    </a>
                                </li>
                                <li>
                                    <a href=\"timepicker.html\" title=\"Timepicker\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Timepicker
                                    </a>
                                </li>
                                <li>
                                    <a href=\"colorpicker.html\" title=\"Colorpicker\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Colorpicker
                                    </a>
                                </li>
                                <li>
                                    <a href=\"slider.html\" title=\"Sliders\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href=\"jgrowl_notifications.html\" title=\"JGrowl Notifications\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        JGrowl Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href=\"noty_notifications.html\" title=\"Noty Notifications\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Noty Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href=\"modal_windows.html\" title=\"Modal Windows\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Modal Windows
                                    </a>
                                </li>
                                <li>
                                    <a href=\"loading_bar.html\" title=\"Loading bars\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Loading bars
                                    </a>
                                </li>
                                <li>
                                    <a href=\"tooltips.html\" title=\"Tooltips\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Tooltips
                                    </a>
                                </li>
                                <li>
                                    <a href=\"popovers.html\" title=\"Popovers\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href=\"sortable.html\" title=\"Sortable Elements\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Sortable Elements
                                    </a>
                                </li>
                                <li>
                                    <a href=\"dropdown_menus.html\" title=\"Dropdown Menus\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Dropdown Menus
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Elements\">
                                <i class=\"glyph-icon icon-laptop\"></i>
                                Advanced Elements
                            </a>
                            <ul>
                                <li>
                                    <a href=\"content_boxes.html\" title=\"Content Boxes\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Content Boxes
                                    </a>
                                </li>
                                <li>
                                    <a href=\"response_messages.html\" title=\"Response Messages\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Response Messages
                                    </a>
                                </li>
                                <li>
                                    <a href=\"badges.html\" title=\"Badges &amp; Labels\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Badges &amp; Labels
                                    </a>
                                </li>
                                <li>
                                    <a href=\"overlays.html\" title=\"Overlays\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Overlays
                                    </a>
                                </li>
                                <li>
                                    <a href=\"navigation_menus.html\" title=\"Navigation Menus\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href=\"icons.html\" title=\"Icons\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Icons
                                    </a>
                                </li>
                                <li>
                                    <a href=\"buttons.html\" title=\"Buttons\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href=\"pagination.html\" title=\"Pagination\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href=\"typography.html\" title=\"Typography\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Typography
                                    </a>
                                </li>
                                <li>
                                    <a href=\"animations.html\" title=\"Animations\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Animations
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Charts\">
                                <i class=\"glyph-icon icon-bar-chart-o\"></i>
                                Data visualization
                            </a>
                            <ul>
                                <li>
                                    <a href=\"charts_piegauges.html\" title=\"Pie Gauges\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Pie Gauges
                                    </a>
                                </li>
                                <li>
                                    <a href=\"charts_xcharts.html\" title=\"xCharts\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        xCharts
                                        <span class=\"label primary-bg float-right tooltip-button\" title=\"New feature added in v1.2\">NEW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"charts_justgage.html\" title=\"JustGage\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        JustGage
                                    </a>
                                </li>
                                <li>
                                    <a href=\"charts_sparklines.html\" title=\"Sparklines\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Sparklines
                                    </a>
                                </li>
                                <li>
                                    <a href=\"charts_morris.html\" title=\"Morris Charts\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Morris Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Tables\">
                                <i class=\"glyph-icon icon-table\"></i>
                                Data Tables
                            </a>
                            <ul>
                                <li>
                                    <a href=\"tables.html\" title=\"Normal tables\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Normal tables
                                    </a>
                                </li>
                                <li>
                                    <a href=\"tables_dynamic.html\" title=\"Dynamic tables\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Dynamic tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Forms\">
                                <i class=\"glyph-icon icon-sort-amount-asc\"></i>
                                Forms components
                            </a>
                            <ul>
                                <li>
                                    <a href=\"forms.html\" title=\"Layouts &amp; Elements\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Layouts &amp; Elements
                                    </a>
                                </li>
                                <li>
                                    <a href=\"forms_validation.html\" title=\"Forms validation\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Forms validation
                                    </a>
                                </li>
                                <li>
                                    <a href=\"forms_masks.html\" title=\"Forms input masks\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Forms input masks
                                    </a>
                                </li>
                                <li>
                                    <a href=\"forms_knobs.html\" title=\"Input knobs\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Input knobs
                                    </a>
                                </li>
                                <li>
                                    <a href=\"form_wizard.html\" title=\"Form wizard\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Form wizard
                                    </a>
                                </li>
                                <li>
                                    <a href=\"forms_inline.html\" title=\"Inline editor\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Inline editor
                                    </a>
                                </li>
                                <li>
                                    <a href=\"image_editor.html\" title=\"Image crop\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Image crop
                                    </a>
                                </li>
                                <li>
                                    <a href=\"file_upload.html\" title=\"Files uploader\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Files uploader
                                    </a>
                                </li>
                                <li>
                                    <a href=\"dropzone_uploader.html\" title=\"Dropzone uploader\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Dropzone uploader
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" title=\"Maps\">
                                <i class=\"glyph-icon icon-map-marker\"></i>
                                Maps API
                            </a>
                            <ul>
                                <li>
                                    <a href=\"google_maps.html\" title=\"Google Maps\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Google maps
                                    </a>
                                </li>
                                <li>
                                    <a href=\"vector_maps.html\" title=\"Vector maps\">
                                        <i class=\"glyph-icon icon-chevron-right\"></i>
                                        Vector maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"divider mrg5T mobile-hidden\"></div>
                    <div class=\"text-center mobile-hidden\">
                        <div class=\"button-group display-inline\">
                            <a href=\"javascript:;\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"Messages\">
                                <i class=\"glyph-icon icon-flag\"></i>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"Mailbox\">
                                <i class=\"glyph-icon icon-inbox\"></i>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"Content\">
                                <i class=\"glyph-icon icon-hdd\"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div><!-- #page-sidebar -->
            <div id=\"menu-right\" class=\"scrollable-content hidden\">
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Cloud status
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open pad20T pad20B\">

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">New visits</div>
                            <div class=\"chart-alt-2\" data-percent=\"55\"><span>55</span>%</div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Bounce rate</div>
                            <div class=\"chart-alt-2\" data-percent=\"46\"><span>46</span>%</div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"text-center font-gray-dark pad5B text-transform-upr font-size-11\">Server load</div>
                            <div class=\"chart-alt-2\" data-percent=\"92\"><span>92</span>%</div>
                        </div>
                    </div>
                    <div class=\"divider\"></div>
                    <div class=\"text-center\">
                        <a href=\"javascript:;\" class=\"btn center-div ui-state-default small text-transform-upr updateEasyPieChart\">
                            <span class=\"button-content font-normal\">
                                <i class=\"glyph-icon icon-refresh float-left\"></i>
                                Refresh all pie charts
                            </span>
                        </a>
                    </div>
                </div>
                <div class=\"clear\"></div>
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Realtime server load
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open clearfix\">

                    <div id=\"g10\" class=\"small-gauge float-left\"></div>
                    <div id=\"g11\" class=\"small-gauge float-right\"></div>

                </div>
                <div class=\"clear\"></div>
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Tasks for today
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open\">

                    <ul class=\"progress-box progress-box-alt\">
                        <li>
                            <div class=\"progress-title\">
                                New features development
                                <b>87%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"87\">
                                <div class=\"progressbar-value bg-azure\">
                                    <div class=\"progressbar-overlay\"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Finishing uploading files
                                <b>66%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"66\">
                                <div class=\"progressbar-value bg-red\">
                                    <div class=\"progressbar-overlay\"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Creating tutorials
                                <b>58%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"58\">
                                <div class=\"progressbar-value primary-bg-alt\"></div>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress-title\">
                                Frontend bonus theme
                                <b>74%</b>
                            </div>
                            <div class=\"progressbar-smaller progressbar\" data-value=\"74\">
                                <div class=\"progressbar-value bg-purple\"></div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class=\"clear\"></div>
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Pending notifications
                    <span class=\"badge bg-orange tooltip-button\" title=\"Orange badge\">4</span>
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open\">

                    <ul class=\"notifications-box remove-border\">
                        <li>
                            <span class=\"btn bg-red radius-all-100 icon-notification glyph-icon icon-glass\"></span>
                            <span class=\"notification-text\">You have to buy milk</span>
                        </li>
                        <li>
                            <span class=\"btn primary-bg-alt radius-all-100 icon-notification glyph-icon icon-leaf\"></span>
                            <span class=\"notification-text\">Don't forget about new features</span>
                        </li>
                        <li>
                            <span class=\"btn bg-yellow radius-all-100 icon-notification glyph-icon icon-trophy\"></span>
                            <span class=\"notification-text\">Eat some donuts</span>
                        </li>
                    </ul>

                </div>
                <div class=\"clear\"></div>
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Sales for today
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open\">
                    <div class=\"info-box mrg10B bg-white remove-border radius-all-4 tooltip-button\" title=\"4px border radius\">
                        <div class=\"chart-icon\">
                            <div class=\"sprk-1-dash\">5,6,7,5,9,8,6,3,2,1,2,4,2,2,4,6,7</div>
                        </div>
                        <b>Current growth</b>
                        <span class=\"stats font-blue\">
                            <i class=\"glyph-icon icon-chevron-down font-red\"></i>
                            765
                            <span class=\"font-orange\">-8.1</span>
                        </span>
                    </div>
                </div>
                <div class=\"clear\"></div>
                <a href=\"javascript:;\" title=\"Get Source\" class=\"popover-title button-toggle-open\">
                    Tabs example
                    <i class=\"glyph-icon icon-caret-right icon-caret-down\"></i>
                </a>
                <div class=\"toggle-content-open\">

                    <div class=\"tabs\">
                        <ul>
                            <li>
                                <a href=\"#core-helpers-tabs-1\" title=\"Tab 1\">
                                    <i class=\"glyph-icon icon-archive font-blue font-size-23\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#core-helpers-tabs-2\" title=\"Tab 2\">
                                    <i class=\"glyph-icon icon-beaker font-black font-size-23\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#core-helpers-tabs-3\" title=\"Tab 3\">
                                    <i class=\"glyph-icon icon-cogs font-blue font-size-23\"></i>
                                </a>
                            </li>
                        </ul>
                        <div id=\"core-helpers-tabs-1\">
                            tab 1 content
                        </div>
                        <div id=\"core-helpers-tabs-2\">
                            tab 2 content
                        </div>
                        <div id=\"core-helpers-tabs-3\">
                            tab 3 content
                        </div>
                    </div>

                </div>
            </div>

            <script type=\"text/javascript\">



            </script>
            <div id=\"page-content-wrapper\">
                <div id=\"page-title\">

<h3>
    Vector maps
    <small>
        You can use the vector maps to create all kinds of map based statistics.
    </small>
</h3>
                    <div id=\"breadcrumb-right\">
                        <div id=\"sidebar-search\">
                            <input type=\"text\" placeholder=\"Search...\" class=\"autocomplete-input input tooltip-button\" data-placement=\"bottom\" title=\"Type &apos;jav&apos; to see the available tags...\" id=\"\" name=\"\">
                            <i class=\"glyph-icon icon-search\"></i>
                        </div>
                        <div class=\"float-right\">
                            <a href=\"javascript:;\" class=\"btn medium bg-white tooltip-button black-modal-60 mrg5R\" data-placement=\"bottom\" title=\"Open modal window\">
                                <span class=\"button-content\">
                                    <i class=\"glyph-icon icon-question\"></i>
                                </span>
                            </a>

                            <div class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"btn medium bg-white\" title=\"Example dropdown\" data-toggle=\"dropdown\">
                                    <span class=\"button-content\">
                                        <i class=\"glyph-icon icon-cog float-left\"></i>
                                        <i class=\"glyph-icon icon-caret-down float-right\"></i>
                                    </span>
                                </a>
                                <div class=\"dropdown-menu pad0A float-right\">
                                    <div class=\"medium-box\">
                                        <div class=\"bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A\">Form example</div>
                                        <div class=\"pad10A\">
                                            <p class=\"font-gray-dark pad0B\">This <span class=\"label primary-bg-alt\">dropdown box</span> uses the Twitter Bootstrap dropdown plugin.</p>
                                            <div class=\"divider mrg10T mrg10B\"></div>

                                                <form id=\"demo-form\" action=\"\" class=\"col-md-12\" method=\"\">
                                                    <div class=\"form-row\">
                                                        <div class=\"form-label col-md-4\">
                                                            <label for=\"\">
                                                                Name:
                                                                <span class=\"required\">*</span>
                                                            </label>
                                                        </div>
                                                        <div class=\"form-input col-md-8\">
                                                            <input type=\"text\" id=\"email\" name=\"email\" data-type=\"email\" data-trigger=\"change\" data-required=\"true\" class=\"parsley-validated\">
                                                        </div>
                                                    </div>
                                                    <div class=\"form-row\">
                                                        <div class=\"form-label col-md-4\">
                                                            <label for=\"\">
                                                                Email:
                                                                <span class=\"required\">*</span>
                                                            </label>
                                                        </div>
                                                        <div class=\"form-input col-md-8\">
                                                            <input type=\"text\" id=\"email\" name=\"email\" data-type=\"email\" data-trigger=\"change\" data-required=\"true\" class=\"parsley-validated\">
                                                        </div>
                                                    </div>
                                                    <div class=\"form-row\">
                                                        <div class=\"form-label col-md-4\">
                                                            <label for=\"\">
                                                                Website:
                                                            </label>
                                                        </div>
                                                        <div class=\"form-input col-md-8\">
                                                            <input type=\"text\" id=\"website\" name=\"website\" data-trigger=\"change\" data-type=\"url\" class=\"parsley-validated\">
                                                        </div>
                                                    </div>
                                                    <div class=\"form-row\">
                                                        <div class=\"form-label col-md-4\">
                                                            <label for=\"\" class=\"label-description\">
                                                                Message:
                                                                <span>20 chars min, 200 max</span>
                                                            </label>
                                                        </div>
                                                        <div class=\"form-input col-md-8\">
                                                            <textarea id=\"message\" name=\"message\" data-trigger=\"keyup\" data-rangelength=\"[20,200]\" class=\"parsley-validated\"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class=\"divider\"></div>
                                                    <div class=\"form-row\">
                                                        <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                                                        <div class=\"form-input col-md-8 col-md-offset-4\">
                                                            <a href=\"javascript:;\" class=\"btn medium primary-bg radius-all-4\" id=\"demo-form-valid\" onclick=\"javascript:\$(&apos;#demo-form&apos;).parsley( &apos;validate&apos; );\" title=\"Validate!\">
                                                                <span class=\"button-content\">
                                                                    Validate the form above
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </form>

                                        </div>

                                        <div class=\"bg-black font-size-12 font-orange pad10A mrg5L mrg5R\">Custom header example</div>
                                        <div class=\"pad15A\">
                                            <p class=\"font-blue text-center font-size-14 pad0B\">Fides Admin comes with powerful helpers that you can use to create virtually any style you want. Read the documentation about helper classes to find out more!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div><!-- #page-title -->
<div id=\"page-content\">

<script type=\"text/javascript\" src=\"assets/js/minified/widgets/other-vectormaps.min.js\"></script>

<script type=\"text/javascript\" src=\"assets/vector-maps/world_map.js\"></script>
<script type=\"text/javascript\" src=\"assets/vector-maps/de_merc_en.js\"></script>
<script type=\"text/javascript\" src=\"assets/vector-maps/mall_map.js\"></script>

<script type=\"text/javascript\">

var gdpData = {
  \"AF\": 16.63,\"AL\": 11.58,\"DZ\": 158.97,\"AO\": 85.81,\"AG\": 1.1,\"AR\": 351.02,\"AM\": 8.83,\"AU\": 1219.72,\"AT\": 366.26,\"AZ\": 52.17,\"BS\": 7.54,\"BH\": 21.73,\"BD\": 105.4,\"BB\": 3.96,\"BY\": 52.89,\"BE\": 461.33,\"BZ\": 1.43,\"BJ\": 6.49,\"BT\": 1.4,\"BO\": 19.18,\"BA\": 16.2,\"BW\": 12.5,\"BR\": 2023.53,\"BN\": 11.96,\"BG\": 44.84,\"BF\": 8.67,\"BI\": 1.47,\"KH\": 11.36,\"CM\": 21.88,\"CA\": 1563.66,\"CV\": 1.57,\"CF\": 2.11,\"TD\": 7.59,\"CL\": 199.18,\"CN\": 5745.13,\"CO\": 283.11,\"KM\": 0.56,\"CD\": 12.6,\"CG\": 11.88,\"CR\": 35.02,\"CI\": 22.38,\"HR\": 59.92,\"CY\": 22.75,\"CZ\": 195.23,\"DK\": 304.56,\"DJ\": 1.14,\"DM\": 0.38,\"DO\": 50.87,\"EC\": 61.49,\"EG\": 216.83,\"SV\": 21.8,\"GQ\": 14.55,\"ER\": 2.25,\"EE\": 19.22,\"ET\": 30.94,\"FJ\": 3.15,\"FI\": 231.98,\"FR\": 2555.44,\"GA\": 12.56,\"GM\": 1.04,\"GE\": 11.23,\"DE\": 3305.9,\"GH\": 18.06,\"GR\": 305.01,\"GD\": 0.65,\"GT\": 40.77,\"GN\": 4.34,\"GW\": 0.83,\"GY\": 2.2,\"HT\": 6.5,\"HN\": 15.34,\"HK\": 226.49,\"HU\": 132.28,\"IS\": 12.77,\"IN\": 1430.02,\"ID\": 695.06,\"IR\": 337.9,\"IQ\": 84.14,\"IE\": 204.14,\"IL\": 201.25,\"IT\": 2036.69,\"JM\": 13.74,\"JP\": 5390.9,\"JO\": 27.13,\"KZ\": 129.76,\"KE\": 32.42,\"KI\": 0.15,\"KR\": 986.26,\"UNDEFINED\": 5.73,\"KW\": 117.32,\"KG\": 4.44,\"LA\": 6.34,\"LV\": 23.39,\"LB\": 39.15,\"LS\": 1.8,\"LR\": 0.98,\"LY\": 77.91,\"LT\": 35.73,\"LU\": 52.43,\"MK\": 9.58,\"MG\": 8.33,\"MW\": 5.04,\"MY\": 218.95,\"MV\": 1.43,\"ML\": 9.08,\"MT\": 7.8,\"MR\": 3.49,\"MU\": 9.43,\"MX\": 1004.04,\"MD\": 5.36,\"MN\": 5.81,\"ME\": 3.88,\"MA\": 91.7,\"MZ\": 10.21,\"MM\": 35.65,\"NA\": 11.45,\"NP\": 15.11,\"NL\": 770.31,\"NZ\": 138,\"NI\": 6.38,\"NE\": 5.6,\"NG\": 206.66,\"NO\": 413.51,\"OM\": 53.78,\"PK\": 174.79,\"PA\": 27.2,\"PG\": 8.81,\"PY\": 17.17,\"PE\": 153.55,\"PH\": 189.06,\"PL\": 438.88,\"PT\": 223.7,\"QA\": 126.52,\"RO\": 158.39,\"RU\": 1476.91,\"RW\": 5.69,\"WS\": 0.55,\"ST\": 0.19,\"SA\": 434.44,\"SN\": 12.66,\"RS\": 38.92,\"SC\": 0.92,\"SL\": 1.9,\"SG\": 217.38,\"SK\": 86.26,\"SI\": 46.44,\"SB\": 0.67,\"ZA\": 354.41,\"ES\": 1374.78,\"LK\": 48.24,\"KN\": 0.56,\"LC\": 1,\"VC\": 0.58,\"SD\": 65.93,\"SR\": 3.3,\"SZ\": 3.17,\"SE\": 444.59,\"CH\": 522.44,\"SY\": 59.63,\"TW\": 426.98,\"TJ\": 5.58,\"TZ\": 22.43,\"TH\": 312.61,\"TL\": 0.62,\"TG\": 3.07,\"TO\": 0.3,\"TT\": 21.2,\"TN\": 43.86,\"TR\": 729.05,\"TM\": 0,\"UG\": 17.12,\"UA\": 136.56,\"AE\": 239.65,\"GB\": 2258.57,\"US\": 14624.18,\"UY\": 40.71,\"UZ\": 37.72,\"VU\": 0.72,\"VE\": 285.21,\"VN\": 101.99,\"YE\": 30.02,\"ZM\": 15.69,\"ZW\": 5.57
};

\$(function(){
  \$('#world-map-gdp').vectorMap({
    map: 'world_mill_en',
    series: {
      regions: [{
        values: gdpData,
        scale: ['#C8EEFF', '#0071A4'],
        normalizeFunction: 'polynomial'
      }]
    },
    onLabelShow: function(e, el, code){
      el.html(el.html()+' (GDP - '+gdpData[code]+')');
    }
  });
});

\$(function(){
  \$('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    markerStyle: {
      initial: {
        fill: '#F8E23B',
        stroke: '#383f47'
      }
    },
    backgroundColor: '#383f47',
    markers: [
      {latLng: [41.90, 12.45], name: 'Vatican City'},
      {latLng: [43.73, 7.41], name: 'Monaco'},
      {latLng: [-0.52, 166.93], name: 'Nauru'},
      {latLng: [-8.51, 179.21], name: 'Tuvalu'},
      {latLng: [43.93, 12.46], name: 'San Marino'},
      {latLng: [47.14, 9.52], name: 'Liechtenstein'},
      {latLng: [7.11, 171.06], name: 'Marshall Islands'},
      {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
      {latLng: [3.2, 73.22], name: 'Maldives'},
      {latLng: [35.88, 14.5], name: 'Malta'},
      {latLng: [12.05, -61.75], name: 'Grenada'},
      {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
      {latLng: [13.16, -59.55], name: 'Barbados'},
      {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
      {latLng: [-4.61, 55.45], name: 'Seychelles'},
      {latLng: [7.35, 134.46], name: 'Palau'},
      {latLng: [42.5, 1.51], name: 'Andorra'},
      {latLng: [14.01, -60.98], name: 'Saint Lucia'},
      {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
      {latLng: [1.3, 103.8], name: 'Singapore'},
      {latLng: [1.46, 173.03], name: 'Kiribati'},
      {latLng: [-21.13, -175.2], name: 'Tonga'},
      {latLng: [15.3, -61.38], name: 'Dominica'},
      {latLng: [-20.2, 57.5], name: 'Mauritius'},
      {latLng: [26.02, 50.55], name: 'Bahrain'},
      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
    ]
  });
});

\$(function(){
  var map,
      markers = [
        {latLng: [52.50, 13.39], name: 'Berlin'},
        {latLng: [53.56, 10.00], name: 'Hamburg'},
        {latLng: [48.13, 11.56], name: 'Munich'},
        {latLng: [50.95, 6.96], name: 'Cologne'},
        {latLng: [50.11, 8.68], name: 'Frankfurt am Main'},
        {latLng: [48.77, 9.17], name: 'Stuttgart'},
        {latLng: [51.23, 6.78], name: 'Düsseldorf'},
        {latLng: [51.51, 7.46], name: 'Dortmund'},
        {latLng: [51.45, 7.01], name: 'Essen'},
        {latLng: [53.07, 8.80], name: 'Bremen'}
      ],
      cityAreaData = [
        887.70,
        755.16,
        310.69,
        405.17,
        248.31,
        207.35,
        217.22,
        280.71,
        210.32,
        325.42
      ]

  map = new jvm.WorldMap({
    container: \$('#map-hu'),
    map: 'de_merc_en',
    regionsSelectable: true,
    markersSelectable: true,
    markers: markers,
    markerStyle: {
      initial: {
        fill: '#4DAC26'
      },
      selected: {
        fill: '#CA0020'
      }
    },
    regionStyle: {
      initial: {
        fill: '#B8E186'
      },
      selected: {
        fill: '#F4A582'
      }
    },
    series: {
      markers: [{
        attribute: 'r',
        scale: [5, 15],
        values: cityAreaData
      }]
    },
    onRegionSelected: function(){
      if (window.localStorage) {
        window.localStorage.setItem(
          'jvectormap-selected-regions',
          JSON.stringify(map.getSelectedRegions())
        );
      }
    },
    onMarkerSelected: function(){
      if (window.localStorage) {
        window.localStorage.setItem(
          'jvectormap-selected-markers',
          JSON.stringify(map.getSelectedMarkers())
        );
      }
    }
  });
  map.setSelectedRegions( JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ) );
  map.setSelectedMarkers( JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ) );
});

\$(function(){
  \$('#mall-map').vectorMap({
    map: 'mall',
    backgroundColor: 'transparent',
    markers: [{
      coords: [60, 110],
      name: 'Escalator 1',
      style: {fill: 'yellow'}
    },{
      coords: [260, 95],
      name: 'Escalator 2',
      style: {fill: 'yellow'}
    },{
      coords: [434, 95],
      name: 'Escalator 3',
      style: {fill: 'yellow'}
    },{
      coords: [634, 110],
      name: 'Escalator 4',
      style: {fill: 'yellow'}
    }],
    series: {
      regions: [{
        values: {
          F102: 'SPORTS & OUTDOOR',
          F103: 'HOME DECOR',
          F105: 'FASHION',
          F106: 'OTHER',
          F108: 'BEAUTY & SPA',
          F109: 'FASHION',
          F110: 'BEAUTY & SPA',
          F111: 'URBAN FAVORITES',
          F114: 'SERVICES',
          F166: 'DINING',
          F167: 'FASHION',
          F169: 'DINING',
          F170: 'ENTERTAINMENT',
          F172: 'DINING',
          F174: 'DINING',
          F115: 'KIDS STUFF',
          F117: 'LIFESTYLE',
          F118: 'URBAN FAVORITES',
          F119: 'FASHION',
          F120: 'FASHION',
          F122: 'KIDS STUFF',
          F124: 'KIDS STUFF',
          F125: 'KIDS STUFF',
          F126: 'KIDS STUFF',
          F128: 'KIDS STUFF',
          F129: 'LIFESTYLE',
          F130: 'HOME DECOR',
          F132: 'DINING',
          F133: 'SPORTS & OUTDOOR',
          F134: 'KIDS STUFF',
          F135: 'LIFESTYLE',
          F136: 'LIFESTYLE',
          F139: 'KIDS STUFF',
          F153: 'DINING',
          F155: 'FASHION',
          F156: 'URBAN FAVORITES',
          F157: 'URBAN FAVORITES',
          F158: 'LINGERIE & UNDERWEAR',
          F159: 'FASHION',
          F160: 'FASHION',
          F162: 'FASHION',
          F164: 'FASHION',
          F165: 'FASHION',
          FR01: 'REST ROOMS',
          FR02: 'REST ROOMS',
          FR03: 'REST ROOMS',
          FR04: 'REST ROOMS',
          FFC: 'DINING'
        },
        scale: {
          \"FASHION\": \"#2761ad\",
          \"LINGERIE & UNDERWEAR\": \"#d58aa3\",
          \"BEAUTY & SPA\": \"#ee549f\",
          \"URBAN FAVORITES\": \"#15bbba\",
          \"SPORTS & OUTDOOR\": \"#8864ab\",
          \"KIDS STUFF\": \"#ef4e36\",
          \"ENTERTAINMENT\": \"#e47325\",
          \"HOME DECOR\": \"#a2614f\",
          \"LIFESTYLE\": \"#8a8934\",
          \"DINING\": \"#73bb43\",
          \"REST ROOMS\": \"#6c260f\",
          \"SERVICES\": \"#504d7c\",
          \"OTHER\": \"#c7b789\"
        }
      }]
    },
    onRegionLabelShow: function(e, el, code){
      if (el.html() === '') {
        e.preventDefault();
      }
    }
  });
});

</script>



<h3>World map</h3>
<p class=\"font-gray-dark\">
    This is a basic world map example.
</p>

<div class=\"example-box\">
    <div class=\"example-code clearfix\">

      <div id=\"world-map-gdp\" class=\"col-md-6\" style=\"height: 350px;\"></div>

    </div>
    
</div>

<h3>Markers</h3>
<p class=\"font-gray-dark\">
    This is a basic world map with markers example.
</p>

<div class=\"example-box\">
    <div class=\"example-code clearfix\">

      <div id=\"world-map-markers\" class=\"col-md-6\" style=\"height: 350px;\"></div>

    </div>
    
</div>

<h3>Region selection</h3>
<p class=\"font-gray-dark\">
    This vector map uses the map js file.
</p>

<div class=\"infobox notice-bg\">
    <div class=\"bg-yellow large btn info-icon\">
        <i class=\"glyph-icon icon-thumbs-up-alt\"></i>
    </div>
    <h4 class=\"infobox-title\">Maps</h4>
    <p>You can download more free maps <a href=\"http://jvectormap.com/maps/world/europe/\" target=\"_blank\" title=\"Download maps\">here</a>.</p>
</div>

<div class=\"example-box\">
    <div class=\"example-code clearfix\">

      <div id=\"map-hu\" class=\"col-md-6\" style=\"height: 350px;\"></div>

    </div>
    
</div>


<h3>Region selection</h3>
<p class=\"font-gray-dark\">
    This vector map uses the map js file.
</p>

<div class=\"infobox notice-bg\">
    <div class=\"bg-yellow large btn info-icon\">
        <i class=\"glyph-icon icon-thumbs-up-alt\"></i>
    </div>
    <h4 class=\"infobox-title\">Maps</h4>
    <p>You can download more free maps <a href=\"http://jvectormap.com/maps/world/europe/\" target=\"_blank\" title=\"Download maps\">here</a>.</p>
</div>

<div class=\"example-box\">
    <div class=\"example-code clearfix\">

      <div id=\"mall-map\" class=\"col-md-6\" style=\"height: 350px;\"></div>

    </div>
    
</div>


                \t</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

    </body>
</html>
";
        
        $__internal_55c15cfdd995fe1792bcce586a40abf023f19fcca7378bfb2c857c706aa91781->leave($__internal_55c15cfdd995fe1792bcce586a40abf023f19fcca7378bfb2c857c706aa91781_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/vector_maps.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!-- AUI Framework -->*/
/* <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>Fides Admin</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* */
/*         <!-- Favicons -->*/
/* */
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">*/
/*         <link rel="shortcut icon" href="assets/images/icons/favicon.png">*/
/* */
/*         <!--[if lt IE 9]>*/
/*           <script src="assets/js/minified/core/html5shiv.min.js"></script>*/
/*           <script src="assets/js/minified/core/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Fides Admin CSS Core -->*/
/* */
/*         <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css">*/
/* */
/*         <!-- Theme UI -->*/
/* */
/*         <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/fides/color-schemes/dark-blue.min.css">*/
/* */
/*         <!-- Fides Admin Responsive -->*/
/* */
/*         <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/common.min.css">*/
/*         <!-- <link rel="stylesheet" type="text/css" href="../_assets/themes/fides/common.css"> -->*/
/* */
/*         <link id="theme-animations" rel="stylesheet" type="text/css" href="assets/themes/minified/fides/animations.min.css">*/
/* */
/*         <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/responsive.min.css">*/
/* */
/*         <!-- Fides Admin JS -->*/
/* */
/*         <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>*/
/* */
/*         <script type="text/javascript" src="assets/js/minified/core/raphael.min.js"></script>*/
/*         <script type="text/javascript" src="assets/js/minified/widgets/charts-justgage.min.js"></script>*/
/* */
/*     </head>*/
/*     <body>*/
/*         */
/* */
/*         <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">*/
/*             <img src="assets/images/loader-dark.gif" alt="">*/
/*         </div>*/
/* */
/*         <div id="page-wrapper" class="demo-example">*/
/* */
/*             <div class="theme-customizer">*/
/*                 <a href="javascript:;" class="change-theme-btn" title="Change theme">*/
/*                     <i class="glyph-icon icon-cog"></i>*/
/*                 </a>*/
/*                 <div class="theme-wrapper">*/
/* */
/*                     <div class="popover-title">Color schemes</div>*/
/*                     <div class="pad10A clearfix change-layout-theme">*/
/*                         <p class="font-gray-dark font-size-11 pad0B">More color schemes will be available soon!</p>*/
/*                         <div class="divider mrg10T mrg10B"></div>*/
/*                         <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="">*/
/*                             <span style="background: #2381E9;"></span>*/
/*                         </a>*/
/* <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-blue" title="">*/
/*                             <span style="background: #2381E9;"></span>*/
/*                         </a> -->*/
/*                         <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="D">*/
/*                             <span style="background: #78CE12;"></span>*/
/*                         </a>*/
/* <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-blue" title="D">*/
/*                             <span style="background: #78CE12;"></span>*/
/*                         </a> -->*/
/*                         <a href="javascript:;" class="choose-theme" layout-theme="dark-orange" title="">*/
/*                             <span style="background: #FF6041;"></span>*/
/*                         </a>*/
/* <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-orange" title="">*/
/*                             <span style="background: #FF6041;"></span>*/
/*                         </a> -->*/
/*                         <a href="javascript:;" class="choose-theme" layout-theme="inverse-blue" title="">*/
/*                             <span style="background: #20242A;"></span>*/
/*                         </a>*/
/*                         <a href="javascript:;" class="choose-theme" layout-theme="dark-gray" title="">*/
/*                             <span style="background: #646464;"></span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="popover-title">Layout options</div>*/
/*                     <div class="pad10A clearfix">*/
/*                         <a class="fluid-layout-btn hidden primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Full width layout</span></a>*/
/*                         <a class="boxed-layout-btn primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Boxed layout</span></a>*/
/* */
/*                         <a class="enable-animations hidden primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Enable animations</span></a>*/
/*                         <a class="disable-animations primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Disable animations</span></a>*/
/*                     </div>*/
/*                     <div class="popover-title">Boxed layout backgrounds</div>*/
/*                     <div class="pad10A clearfix">*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#000" style="background: #000;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#333" style="background: #333;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#666" style="background: #666;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#888" style="background: #888;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#383d43" style="background: #383d43;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#fafafa" style="background: #fafafa; border: #ccc solid 1px;" title=""></a>*/
/*                         <a href="javascript:;" class="choose-bg" boxed-bg="#fff" style="background: #fff; border: #eee solid 1px;" title=""></a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="page-header" class="clearfix">*/
/*                 <div id="header-logo">*/
/*                     <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">*/
/*                         <i class="glyph-icon icon-caret-left"></i>*/
/*                     </a>*/
/*                     <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">*/
/*                         <i class="glyph-icon icon-caret-right"></i>*/
/*                     </a>*/
/*                     <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">*/
/*                         <i class="glyph-icon icon-align-justify"></i>*/
/*                     </a>*/
/*                     Aymen_Messaoudi <i class="opacity-80"></i>*/
/*                 </div>*/
/*                 <div class="hide" id="black-modal-60" title="Modal window example">*/
/*                     <div class="pad20A">*/
/* */
/*                         <div class="infobox notice-bg">*/
/*                             <div class="bg-azure large btn info-icon">*/
/*                                 <i class="glyph-icon icon-bullhorn"></i>*/
/*                             </div>*/
/*                             <h4 class="infobox-title">Modal windows</h4>*/
/*                             <p>Thanks to the solid modular Fides Admin arhitecture, modal windows customizations are very flexible and easy to apply.</p>*/
/*                         </div>*/
/* */
/*                         <h4 class="heading-1 mrg20T clearfix">*/
/*                             <div class="heading-content" style="width: auto;">*/
/*                                 Icons*/
/*                                 <small>*/
/*                                     All icons across the Fides Admin Framework use FontAwesome icons.*/
/*                                 </small>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                             <div class="divider"></div>*/
/*                         </h4>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-compass" href="../icon/compass"><i class="glyph-icon icon-compass"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse" href="../icon/collapse"><i class="glyph-icon icon-collapse"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse-top" href="../icon/collapse-top"><i class="glyph-icon icon-collapse-top"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-expand" href="../icon/expand"><i class="glyph-icon icon-expand"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-eur" href="../icon/eur"><i class="glyph-icon icon-eur"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-euro" href="../icon/eur"><i class="glyph-icon icon-euro"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-gbp" href="javascript:;"><i class="glyph-icon icon-gbp"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-usd" href="javascript:;"><i class="glyph-icon icon-usd"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-dollar" href="javascript:;"><i class="glyph-icon icon-dollar"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-inr" href="javascript:;"><i class="glyph-icon icon-inr"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-rupee" href="javascript:;"><i class="glyph-icon icon-rupee"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-jpy" href="javascript:;"><i class="glyph-icon icon-jpy"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-yen" href="javascript:;"><i class="glyph-icon icon-yen"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-cny" href="javascript:;"><i class="glyph-icon icon-cny"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-renminbi" href="javascript:;"><i class="glyph-icon icon-renminbi"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-krw" href="javascript:;"><i class="glyph-icon icon-krw"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-won" href="javascript:;"><i class="glyph-icon icon-won"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-btc" href="javascript:;"><i class="glyph-icon icon-btc"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-bitcoin" href="javascript:;"><i class="glyph-icon icon-bitcoin"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file" href="javascript:;"><i class="glyph-icon icon-file"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file-text" href="javascript:;"><i class="glyph-icon icon-file-text"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet-al" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet-alt"></i>t</a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attributes" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attribu" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes-alt"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order" href="javascript:;"><i class="glyph-icon icon-sort-by-order"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order-alt" href="javascript:;"><i class="glyph-icon icon-sort-by-order-alt"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-up" href="javascript:;"><i class="glyph-icon icon-thumbs-up"></i></a>*/
/* */
/*                         <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-down" href="javascript:;"><i class="glyph-icon icon-thumbs-down"></i></a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="hide" id="white-modal-80" title="Dialog with tabs">*/
/*                     <div class="tabs pad15A remove-border opacity-80">*/
/*                         <ul class="opacity-80">*/
/*                             <li><a href="#example-tabs-1">First</a></li>*/
/*                             <li><a href="#example-tabs-2">Second</a></li>*/
/*                             <li><a href="#example-tabs-3">Third</a></li>*/
/*                         </ul>*/
/*                         <div id="example-tabs-1">*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.*/
/*                             </p>*/
/*                             <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                             </p>*/
/*                         </div>*/
/*                         <div id="example-tabs-2">*/
/*                             <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.*/
/*                             </p>*/
/*                             <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                             </p>*/
/*                         </div>*/
/*                         <div id="example-tabs-3">*/
/*                             <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                             </p>*/
/*                             <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="pad10A">*/
/*                         <div class="infobox success-bg radius-all-4">*/
/*                             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ui-dialog-buttonpane clearfix">*/
/* */
/*                         <a href="dropdown_menus.html" class="btn medium float-left bg-azure">*/
/*                             <span class="button-content text-transform-upr font-size-11">Dropdown menus</span>*/
/*                         </a>*/
/*                         <div class="button-group float-right">*/
/*                             <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                                 <i class="glyph-icon icon-star"></i>*/
/*                             </a>*/
/*                             <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                                 <i class="glyph-icon icon-random"></i>*/
/*                             </a>*/
/*                             <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                                 <i class="glyph-icon icon-map-marker"></i>*/
/*                             </a>*/
/*                         </div>*/
/*                         <a href="javascript:;" class="medium btn primary-bg-alt float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">*/
/*                             <i class="glyph-icon icon-plus"></i>*/
/*                         </a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="user-profile hidden-mobile">*/
/*                     <a href="javascript:;" title="" id="open-left-menu" class="updateEasyPieChart user-ico clearfix">*/
/*                         <i class="glyph-icon icon-th-list"></i>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="user-profile dropdown">*/
/*                     <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">*/
/*                         <img width="36" src="assets/images/gravatar.jpg" alt="">*/
/*                         <span>Horia Simon</span>*/
/*                         <i class="glyph-icon icon-chevron-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu float-right">*/
/*                         <li>*/
/*                             <a href="javascript:;" title="">*/
/*                                 <i class="glyph-icon icon-user mrg5R"></i>*/
/*                                 Account Details*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="">*/
/*                                 <i class="glyph-icon icon-cog mrg5R"></i>*/
/*                                 Edit Profile*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="">*/
/*                                 <i class="glyph-icon icon-flag mrg5R"></i>*/
/*                                 Notifications*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="">*/
/*                                 <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>*/
/*                                 <span class="font-bold">Logout</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="dropdown-submenu float-left">*/
/*                             <a href="javascript:;" data-toggle="dropdown" title="">*/
/*                                 Dropdown menu*/
/*                             </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li>*/
/*                                         <a href="javascript:;" title="">*/
/*                                             Submenu 1*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;" title="">*/
/*                                             Submenu 2*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="dropdown-submenu">*/
/*                                         <a href="javascript:;" title="">*/
/*                                             Submenu 3*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li>*/
/*                                                 <a href="javascript:;" title="">*/
/*                                                     Submenu 2-1*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="javascript:;" title="">*/
/*                                                     Submenu 2-2*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="">*/
/*                                 Another menu item*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="dropdown dash-menu">*/
/*                     <a href="javascript:;" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile mrg15R tooltip-button" title="Example menu">*/
/*                         <i class="glyph-icon icon-th"></i>*/
/*                     </a>*/
/*                     <div class="dropdown-menu float-right">*/
/*                         <div class="small-box">*/
/*                             <div class="pad10A dashboard-buttons clearfix">*/
/*                                 <p class="font-gray-dark font-size-11 pad0B">This menu type can be used in pages, not just popovers.</p>*/
/*                                 <div class="divider mrg10T mrg10B"></div>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-blue-alt" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Dashboard</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-blue" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Widgets</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-orange" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-sort-amount-asc opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Tables</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-orange" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Charts</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-purple" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Buttons</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-azure" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-code opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Panels</span>*/
/*                                 </a>*/
/*                             </div>*/
/* */
/*                             <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Dashboard menu</div>*/
/*                             <div class="pad10A dashboard-buttons clearfix">*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border primary-bg" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Dashboard</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border bg-red" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Widgets</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border bg-purple" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-sort-amount-asc opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Tables</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border bg-azure" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Charts</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border bg-yellow" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Buttons</span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button remove-border bg-orange" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <i class="glyph-icon icon-code opacity-80 font-size-20"></i>*/
/*                                     </span>*/
/*                                     <span class="button-content">Panels</span>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="top-icon-bar">*/
/*                     <div class="dropdown">*/
/* */
/*                         <a data-toggle="dropdown" href="javascript:;" title="">*/
/*                             <span class="badge badge-absolute primary-bg">8</span>*/
/*                             <i class="glyph-icon icon-lightbulb-o"></i>*/
/*                         </a>*/
/*                         <div class="dropdown-menu">*/
/* */
/*                             <div class="small-box">*/
/* */
/*                                 <div class="popover-title">Color schemes</div>*/
/*                                 <div class="pad10A clearfix change-layout-theme">*/
/*                                     <p class="font-gray-dark font-size-11 pad0B">More color schemes will be available soon!</p>*/
/*                                     <div class="divider mrg10T mrg10B"></div>*/
/*                                     <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="">*/
/*                                         <span style="background: #2381E9;"></span>*/
/*                                     </a>*/
/*             <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-blue" title="">*/
/*                                         <span style="background: #2381E9;"></span>*/
/*                                     </a> -->*/
/*                                     <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="D">*/
/*                                         <span style="background: #78CE12;"></span>*/
/*                                     </a>*/
/*             <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-blue" title="D">*/
/*                                         <span style="background: #78CE12;"></span>*/
/*                                     </a> -->*/
/*                                     <a href="javascript:;" class="choose-theme" layout-theme="dark-orange" title="">*/
/*                                         <span style="background: #FF6041;"></span>*/
/*                                     </a>*/
/*             <!--                         <a href="javascript:;" class="choose-theme opacity-30" layout-theme="white-orange" title="">*/
/*                                         <span style="background: #FF6041;"></span>*/
/*                                     </a> -->*/
/*                                     <a href="javascript:;" class="choose-theme" layout-theme="inverse-blue" title="">*/
/*                                         <span style="background: #20242A;"></span>*/
/*                                     </a>*/
/*                                     <a href="javascript:;" class="choose-theme" layout-theme="dark-gray" title="">*/
/*                                         <span style="background: #646464;"></span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="popover-title">Layout options</div>*/
/*                                 <div class="pad10A clearfix">*/
/*                                     <a class="fluid-layout-btn hidden primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Full width layout</span></a>*/
/*                                     <a class="boxed-layout-btn primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Boxed layout</span></a>*/
/* */
/*                                     <a class="enable-animations hidden primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Enable animations</span></a>*/
/*                                     <a class="disable-animations primary-bg-alt medium btn" href="javascript:;" title=""><span class="button-content">Disable animations</span></a>*/
/*                                 </div>*/
/*                                 <div class="popover-title">Boxed layout backgrounds</div>*/
/*                                 <div class="pad10A clearfix">*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#000" style="background: #000;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#333" style="background: #333;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#666" style="background: #666;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#888" style="background: #888;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#383d43" style="background: #383d43;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#fafafa" style="background: #fafafa; border: #ccc solid 1px;" title=""></a>*/
/*                                     <a href="javascript:;" class="choose-bg" boxed-bg="#fff" style="background: #fff; border: #eee solid 1px;" title=""></a>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="dropdown">*/
/* */
/*                         <a data-toggle="dropdown" href="javascript:;" title="">*/
/*                             <span class="badge badge-absolute bg-orange">4</span>*/
/*                             <i class="glyph-icon icon-envelope-o"></i>*/
/*                         </a>*/
/*                         <div class="dropdown-menu">*/
/* */
/*                             <div class="scrollable-content medium-box scrollable-small">*/
/* */
/*                                 <ul class="no-border messages-box">*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <i class="glyph-icon icon-warning-sign font-red"></i>*/
/*                                                 <a href="javascript:;" title="Message title">Important message</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <i class="glyph-icon icon-tag font-blue"></i>*/
/*                                                 <a href="javascript:;" title="Message title">Some random email</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <i class="glyph-icon icon-warning-sign font-red"></i>*/
/*                                                 <a href="javascript:;" title="Message title">Important message</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <i class="glyph-icon icon-tag font-blue"></i>*/
/*                                                 <a href="javascript:;" title="Message title">Some random email</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="messages-img">*/
/*                                             <img width="32" src="assets/images/gravatar.jpg" alt="">*/
/*                                         </div>*/
/*                                         <div class="messages-content">*/
/*                                             <div class="messages-title">*/
/*                                                 <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>*/
/*                                                 <div class="messages-time">*/
/*                                                     3 hr ago*/
/*                                                     <span class="glyph-icon icon-time"></span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="messages-text">*/
/*                                                 This message must be read immediately because of it's high importance...*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                             </div>*/
/*                             <div class="pad10A button-pane button-pane-alt">*/
/*                                 <a href="messaging.html" class="btn small float-left bg-white">*/
/*                                     <span class="button-content text-transform-upr font-size-11">All messages</span>*/
/*                                 </a>*/
/*                                 <div class="button-group float-right">*/
/*                                     <a href="javascript:;" class="btn small primary-bg">*/
/*                                         <i class="glyph-icon icon-star"></i>*/
/*                                     </a>*/
/*                                     <a href="javascript:;" class="btn small primary-bg">*/
/*                                         <i class="glyph-icon icon-random"></i>*/
/*                                     </a>*/
/*                                     <a href="javascript:;" class="btn small primary-bg">*/
/*                                         <i class="glyph-icon icon-map-marker"></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <a href="javascript:;" class="small btn bg-red float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">*/
/*                                     <i class="glyph-icon icon-remove"></i>*/
/*                                 </a>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="dropdown">*/
/* */
/*                         <a data-toggle="dropdown" href="javascript:;" title="">*/
/*                             <span class="badge badge-absolute primary-bg">9</span>*/
/*                             <i class="glyph-icon icon-bell"></i>*/
/*                         </a>*/
/*                         <div class="dropdown-menu">*/
/* */
/*                             <div class="popover-title display-block clearfix form-row pad10A">*/
/*                                 <div class="form-input">*/
/*                                     <div class="form-input-icon">*/
/*                                         <i class="glyph-icon icon-search transparent"></i>*/
/*                                         <input type="text" placeholder="Search notifications..." class="radius-all-100" name="" id="">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="scrollable-content medium-box scrollable-small">*/
/* */
/*                                 <ul class="no-border notifications-box">*/
/*                                     <li>*/
/*                                         <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text">This is an error notification</span>*/
/*                                         <div class="notification-time">*/
/*                                             a few seconds ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text">This is a warning notification</span>*/
/*                                         <div class="notification-time">*/
/*                                             <b>15</b> minutes ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <span class="primary-bg btn icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text font-blue font-bold">A success message example.</span>*/
/*                                         <div class="notification-time">*/
/*                                             <b>2 hours</b> ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text">This is an error notification</span>*/
/*                                         <div class="notification-time">*/
/*                                             a few seconds ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text">This is a warning notification</span>*/
/*                                         <div class="notification-time">*/
/*                                             <b>15</b> minutes ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <span class="primary-bg btn icon-notification glyph-icon icon-user"></span>*/
/*                                         <span class="notification-text font-blue">Alternate notification styling.</span>*/
/*                                         <div class="notification-time">*/
/*                                             <b>2 hours</b> ago*/
/*                                             <span class="glyph-icon icon-time"></span>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                             </div>*/
/*                             <div class="pad10A button-pane button-pane-alt text-center">*/
/*                                 <a href="notifications.html" class="btn medium primary-bg">*/
/*                                     <span class="button-content">View all notifications</span>*/
/*                                 </a>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="dropdown">*/
/* */
/*                         <a data-toggle="dropdown" href="javascript:;" title="">*/
/*                             <span class="badge badge-absolute bg-red">2</span>*/
/*                             <i class="glyph-icon icon-tasks"></i>*/
/*                         </a>*/
/*                         <div class="dropdown-menu" id="progress-dropdown">*/
/* */
/*                             <div class="scrollable-content small-box scrollable-small">*/
/* */
/*                                 <ul class="no-border progress-box">*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Finishing uploading files*/
/*                                             <b>23%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="23">*/
/*                                             <div class="progressbar-value primary-bg">*/
/*                                                 <div class="progressbar-overlay"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Roadmap progress*/
/*                                             <b>91%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="91">*/
/*                                             <div class="progressbar-value primary-bg">*/
/*                                                 <div class="progressbar-overlay"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Images upload*/
/*                                             <b>58%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="58">*/
/*                                             <div class="progressbar-value primary-bg-alt"></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             WordPress migration*/
/*                                             <b>74%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="74">*/
/*                                             <div class="progressbar-value bg-purple"></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Agile development procedures*/
/*                                             <b>91%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="91">*/
/*                                             <div class="progressbar-value primary-bg">*/
/*                                                 <div class="progressbar-overlay"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Systems integration*/
/*                                             <b>58%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="58">*/
/*                                             <div class="progressbar-value primary-bg-alt"></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="progress-title">*/
/*                                             Code optimizations*/
/*                                             <b>97%</b>*/
/*                                         </div>*/
/*                                         <div class="progressbar-small progressbar" data-value="97">*/
/*                                             <div class="progressbar-value bg-yellow"></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                             </div>*/
/*                             <div class="pad10A button-pane button-pane-alt text-center">*/
/*                                 <a href="notifications.html" class="btn medium font-normal primary-bg">*/
/*                                     <span class="button-content">View all</span>*/
/*                                 </a>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div><!-- #page-header -->*/
/* */
/*             <div id="page-sidebar" class="scrollable-content">*/
/* */
/*                 <div id="sidebar-menu">*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="index.html" title="Dashboard">*/
/*                                 <i class="glyph-icon icon-dashboard"></i>*/
/*                                 Dashboard*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Components">*/
/*                                 <i class="glyph-icon icon-code"></i>*/
/*                                 Components*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="dashboard_panels.html" title="Dashboard panels">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Dashboard panels*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="tile_buttons.html" title="Tile buttons">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Tile buttons*/
/*                                         <span class="label primary-bg float-right tooltip-button" title="New feature added in v1.2">NEW</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="timeline.html" title="Timeline">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Timeline*/
/*                                         <span class="label bg-orange float-right tooltip-button" title="New feature added in v1.2">NEW</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="todo_list.html" title="Todo list">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Todo list*/
/*                                         <span class="label bg-red float-right tooltip-button" title="New feature added in v1.2">NEW</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="social_boxes.html" title="Social boxes">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Social boxes*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="information_boxes.html" title="Information boxes">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Information boxes*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="calendar.html" title="Calendar">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Calendar*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="other_components.html" title="Other components">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Other components*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Pages">*/
/*                                 <i class="glyph-icon icon-folder-open"></i>*/
/*                                 Example Pages*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="grid.html" title="Grid Layouts">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Grid Layouts*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="helper_classes.html" title="Helpers">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Helpers*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="login.html" title="Login">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Login example 1*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="login-alt.html" title="Login">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Login example 2*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Widgets">*/
/*                                 <i class="glyph-icon icon-tags"></i>*/
/*                                 Widgets &amp; Plugins*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="tabs.html" title="Tabs">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Tabs*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="accordions.html" title="Accordions">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Accordions*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="datepicker.html" title="Datepicker">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Datepicker*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="timepicker.html" title="Timepicker">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Timepicker*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="colorpicker.html" title="Colorpicker">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Colorpicker*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="slider.html" title="Sliders">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Sliders*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="jgrowl_notifications.html" title="JGrowl Notifications">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         JGrowl Notifications*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="noty_notifications.html" title="Noty Notifications">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Noty Notifications*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="modal_windows.html" title="Modal Windows">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Modal Windows*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="loading_bar.html" title="Loading bars">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Loading bars*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="tooltips.html" title="Tooltips">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Tooltips*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="popovers.html" title="Popovers">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Popovers*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="sortable.html" title="Sortable Elements">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Sortable Elements*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="dropdown_menus.html" title="Dropdown Menus">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Dropdown Menus*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Elements">*/
/*                                 <i class="glyph-icon icon-laptop"></i>*/
/*                                 Advanced Elements*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="content_boxes.html" title="Content Boxes">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Content Boxes*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="response_messages.html" title="Response Messages">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Response Messages*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="badges.html" title="Badges &amp; Labels">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Badges &amp; Labels*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="overlays.html" title="Overlays">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Overlays*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="navigation_menus.html" title="Navigation Menus">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Navigation Menus*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="icons.html" title="Icons">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Icons*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="buttons.html" title="Buttons">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Buttons*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="pagination.html" title="Pagination">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Pagination*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="typography.html" title="Typography">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Typography*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="animations.html" title="Animations">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Animations*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Charts">*/
/*                                 <i class="glyph-icon icon-bar-chart-o"></i>*/
/*                                 Data visualization*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="charts_piegauges.html" title="Pie Gauges">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Pie Gauges*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="charts_xcharts.html" title="xCharts">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         xCharts*/
/*                                         <span class="label primary-bg float-right tooltip-button" title="New feature added in v1.2">NEW</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="charts_justgage.html" title="JustGage">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         JustGage*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="charts_sparklines.html" title="Sparklines">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Sparklines*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="charts_morris.html" title="Morris Charts">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Morris Charts*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Tables">*/
/*                                 <i class="glyph-icon icon-table"></i>*/
/*                                 Data Tables*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="tables.html" title="Normal tables">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Normal tables*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="tables_dynamic.html" title="Dynamic tables">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Dynamic tables*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Forms">*/
/*                                 <i class="glyph-icon icon-sort-amount-asc"></i>*/
/*                                 Forms components*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="forms.html" title="Layouts &amp; Elements">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Layouts &amp; Elements*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="forms_validation.html" title="Forms validation">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Forms validation*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="forms_masks.html" title="Forms input masks">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Forms input masks*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="forms_knobs.html" title="Input knobs">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Input knobs*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="form_wizard.html" title="Form wizard">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Form wizard*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="forms_inline.html" title="Inline editor">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Inline editor*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="image_editor.html" title="Image crop">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Image crop*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="file_upload.html" title="Files uploader">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Files uploader*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="dropzone_uploader.html" title="Dropzone uploader">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Dropzone uploader*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" title="Maps">*/
/*                                 <i class="glyph-icon icon-map-marker"></i>*/
/*                                 Maps API*/
/*                             </a>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="google_maps.html" title="Google Maps">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Google maps*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="vector_maps.html" title="Vector maps">*/
/*                                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                                         Vector maps*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <div class="divider mrg5T mobile-hidden"></div>*/
/*                     <div class="text-center mobile-hidden">*/
/*                         <div class="button-group display-inline">*/
/*                             <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="top" title="Messages">*/
/*                                 <i class="glyph-icon icon-flag"></i>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="top" title="Mailbox">*/
/*                                 <i class="glyph-icon icon-inbox"></i>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium primary-bg tooltip-button" data-placement="top" title="Content">*/
/*                                 <i class="glyph-icon icon-hdd"></i>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div><!-- #page-sidebar -->*/
/*             <div id="menu-right" class="scrollable-content hidden">*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Cloud status*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open pad20T pad20B">*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-4">*/
/*                             <div class="text-center font-gray-dark pad5B text-transform-upr font-size-11">New visits</div>*/
/*                             <div class="chart-alt-2" data-percent="55"><span>55</span>%</div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="text-center font-gray-dark pad5B text-transform-upr font-size-11">Bounce rate</div>*/
/*                             <div class="chart-alt-2" data-percent="46"><span>46</span>%</div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="text-center font-gray-dark pad5B text-transform-upr font-size-11">Server load</div>*/
/*                             <div class="chart-alt-2" data-percent="92"><span>92</span>%</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="divider"></div>*/
/*                     <div class="text-center">*/
/*                         <a href="javascript:;" class="btn center-div ui-state-default small text-transform-upr updateEasyPieChart">*/
/*                             <span class="button-content font-normal">*/
/*                                 <i class="glyph-icon icon-refresh float-left"></i>*/
/*                                 Refresh all pie charts*/
/*                             </span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Realtime server load*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open clearfix">*/
/* */
/*                     <div id="g10" class="small-gauge float-left"></div>*/
/*                     <div id="g11" class="small-gauge float-right"></div>*/
/* */
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Tasks for today*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open">*/
/* */
/*                     <ul class="progress-box progress-box-alt">*/
/*                         <li>*/
/*                             <div class="progress-title">*/
/*                                 New features development*/
/*                                 <b>87%</b>*/
/*                             </div>*/
/*                             <div class="progressbar-smaller progressbar" data-value="87">*/
/*                                 <div class="progressbar-value bg-azure">*/
/*                                     <div class="progressbar-overlay"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="progress-title">*/
/*                                 Finishing uploading files*/
/*                                 <b>66%</b>*/
/*                             </div>*/
/*                             <div class="progressbar-smaller progressbar" data-value="66">*/
/*                                 <div class="progressbar-value bg-red">*/
/*                                     <div class="progressbar-overlay"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="progress-title">*/
/*                                 Creating tutorials*/
/*                                 <b>58%</b>*/
/*                             </div>*/
/*                             <div class="progressbar-smaller progressbar" data-value="58">*/
/*                                 <div class="progressbar-value primary-bg-alt"></div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="progress-title">*/
/*                                 Frontend bonus theme*/
/*                                 <b>74%</b>*/
/*                             </div>*/
/*                             <div class="progressbar-smaller progressbar" data-value="74">*/
/*                                 <div class="progressbar-value bg-purple"></div>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Pending notifications*/
/*                     <span class="badge bg-orange tooltip-button" title="Orange badge">4</span>*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open">*/
/* */
/*                     <ul class="notifications-box remove-border">*/
/*                         <li>*/
/*                             <span class="btn bg-red radius-all-100 icon-notification glyph-icon icon-glass"></span>*/
/*                             <span class="notification-text">You have to buy milk</span>*/
/*                         </li>*/
/*                         <li>*/
/*                             <span class="btn primary-bg-alt radius-all-100 icon-notification glyph-icon icon-leaf"></span>*/
/*                             <span class="notification-text">Don't forget about new features</span>*/
/*                         </li>*/
/*                         <li>*/
/*                             <span class="btn bg-yellow radius-all-100 icon-notification glyph-icon icon-trophy"></span>*/
/*                             <span class="notification-text">Eat some donuts</span>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Sales for today*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open">*/
/*                     <div class="info-box mrg10B bg-white remove-border radius-all-4 tooltip-button" title="4px border radius">*/
/*                         <div class="chart-icon">*/
/*                             <div class="sprk-1-dash">5,6,7,5,9,8,6,3,2,1,2,4,2,2,4,6,7</div>*/
/*                         </div>*/
/*                         <b>Current growth</b>*/
/*                         <span class="stats font-blue">*/
/*                             <i class="glyph-icon icon-chevron-down font-red"></i>*/
/*                             765*/
/*                             <span class="font-orange">-8.1</span>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*                 <a href="javascript:;" title="Get Source" class="popover-title button-toggle-open">*/
/*                     Tabs example*/
/*                     <i class="glyph-icon icon-caret-right icon-caret-down"></i>*/
/*                 </a>*/
/*                 <div class="toggle-content-open">*/
/* */
/*                     <div class="tabs">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="#core-helpers-tabs-1" title="Tab 1">*/
/*                                     <i class="glyph-icon icon-archive font-blue font-size-23"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#core-helpers-tabs-2" title="Tab 2">*/
/*                                     <i class="glyph-icon icon-beaker font-black font-size-23"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#core-helpers-tabs-3" title="Tab 3">*/
/*                                     <i class="glyph-icon icon-cogs font-blue font-size-23"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div id="core-helpers-tabs-1">*/
/*                             tab 1 content*/
/*                         </div>*/
/*                         <div id="core-helpers-tabs-2">*/
/*                             tab 2 content*/
/*                         </div>*/
/*                         <div id="core-helpers-tabs-3">*/
/*                             tab 3 content*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/* */
/* */
/*             </script>*/
/*             <div id="page-content-wrapper">*/
/*                 <div id="page-title">*/
/* */
/* <h3>*/
/*     Vector maps*/
/*     <small>*/
/*         You can use the vector maps to create all kinds of map based statistics.*/
/*     </small>*/
/* </h3>*/
/*                     <div id="breadcrumb-right">*/
/*                         <div id="sidebar-search">*/
/*                             <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name="">*/
/*                             <i class="glyph-icon icon-search"></i>*/
/*                         </div>*/
/*                         <div class="float-right">*/
/*                             <a href="javascript:;" class="btn medium bg-white tooltip-button black-modal-60 mrg5R" data-placement="bottom" title="Open modal window">*/
/*                                 <span class="button-content">*/
/*                                     <i class="glyph-icon icon-question"></i>*/
/*                                 </span>*/
/*                             </a>*/
/* */
/*                             <div class="dropdown">*/
/*                                 <a href="javascript:;" class="btn medium bg-white" title="Example dropdown" data-toggle="dropdown">*/
/*                                     <span class="button-content">*/
/*                                         <i class="glyph-icon icon-cog float-left"></i>*/
/*                                         <i class="glyph-icon icon-caret-down float-right"></i>*/
/*                                     </span>*/
/*                                 </a>*/
/*                                 <div class="dropdown-menu pad0A float-right">*/
/*                                     <div class="medium-box">*/
/*                                         <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Form example</div>*/
/*                                         <div class="pad10A">*/
/*                                             <p class="font-gray-dark pad0B">This <span class="label primary-bg-alt">dropdown box</span> uses the Twitter Bootstrap dropdown plugin.</p>*/
/*                                             <div class="divider mrg10T mrg10B"></div>*/
/* */
/*                                                 <form id="demo-form" action="" class="col-md-12" method="">*/
/*                                                     <div class="form-row">*/
/*                                                         <div class="form-label col-md-4">*/
/*                                                             <label for="">*/
/*                                                                 Name:*/
/*                                                                 <span class="required">*</span>*/
/*                                                             </label>*/
/*                                                         </div>*/
/*                                                         <div class="form-input col-md-8">*/
/*                                                             <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="form-row">*/
/*                                                         <div class="form-label col-md-4">*/
/*                                                             <label for="">*/
/*                                                                 Email:*/
/*                                                                 <span class="required">*</span>*/
/*                                                             </label>*/
/*                                                         </div>*/
/*                                                         <div class="form-input col-md-8">*/
/*                                                             <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="form-row">*/
/*                                                         <div class="form-label col-md-4">*/
/*                                                             <label for="">*/
/*                                                                 Website:*/
/*                                                             </label>*/
/*                                                         </div>*/
/*                                                         <div class="form-input col-md-8">*/
/*                                                             <input type="text" id="website" name="website" data-trigger="change" data-type="url" class="parsley-validated">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="form-row">*/
/*                                                         <div class="form-label col-md-4">*/
/*                                                             <label for="" class="label-description">*/
/*                                                                 Message:*/
/*                                                                 <span>20 chars min, 200 max</span>*/
/*                                                             </label>*/
/*                                                         </div>*/
/*                                                         <div class="form-input col-md-8">*/
/*                                                             <textarea id="message" name="message" data-trigger="keyup" data-rangelength="[20,200]" class="parsley-validated"></textarea>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="divider"></div>*/
/*                                                     <div class="form-row">*/
/*                                                         <input type="hidden" name="superhidden" id="superhidden">*/
/*                                                         <div class="form-input col-md-8 col-md-offset-4">*/
/*                                                             <a href="javascript:;" class="btn medium primary-bg radius-all-4" id="demo-form-valid" onclick="javascript:$(&apos;#demo-form&apos;).parsley( &apos;validate&apos; );" title="Validate!">*/
/*                                                                 <span class="button-content">*/
/*                                                                     Validate the form above*/
/*                                                                 </span>*/
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/* */
/*                                                 </form>*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="bg-black font-size-12 font-orange pad10A mrg5L mrg5R">Custom header example</div>*/
/*                                         <div class="pad15A">*/
/*                                             <p class="font-blue text-center font-size-14 pad0B">Fides Admin comes with powerful helpers that you can use to create virtually any style you want. Read the documentation about helper classes to find out more!</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* </div><!-- #page-title -->*/
/* <div id="page-content">*/
/* */
/* <script type="text/javascript" src="assets/js/minified/widgets/other-vectormaps.min.js"></script>*/
/* */
/* <script type="text/javascript" src="assets/vector-maps/world_map.js"></script>*/
/* <script type="text/javascript" src="assets/vector-maps/de_merc_en.js"></script>*/
/* <script type="text/javascript" src="assets/vector-maps/mall_map.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/* var gdpData = {*/
/*   "AF": 16.63,"AL": 11.58,"DZ": 158.97,"AO": 85.81,"AG": 1.1,"AR": 351.02,"AM": 8.83,"AU": 1219.72,"AT": 366.26,"AZ": 52.17,"BS": 7.54,"BH": 21.73,"BD": 105.4,"BB": 3.96,"BY": 52.89,"BE": 461.33,"BZ": 1.43,"BJ": 6.49,"BT": 1.4,"BO": 19.18,"BA": 16.2,"BW": 12.5,"BR": 2023.53,"BN": 11.96,"BG": 44.84,"BF": 8.67,"BI": 1.47,"KH": 11.36,"CM": 21.88,"CA": 1563.66,"CV": 1.57,"CF": 2.11,"TD": 7.59,"CL": 199.18,"CN": 5745.13,"CO": 283.11,"KM": 0.56,"CD": 12.6,"CG": 11.88,"CR": 35.02,"CI": 22.38,"HR": 59.92,"CY": 22.75,"CZ": 195.23,"DK": 304.56,"DJ": 1.14,"DM": 0.38,"DO": 50.87,"EC": 61.49,"EG": 216.83,"SV": 21.8,"GQ": 14.55,"ER": 2.25,"EE": 19.22,"ET": 30.94,"FJ": 3.15,"FI": 231.98,"FR": 2555.44,"GA": 12.56,"GM": 1.04,"GE": 11.23,"DE": 3305.9,"GH": 18.06,"GR": 305.01,"GD": 0.65,"GT": 40.77,"GN": 4.34,"GW": 0.83,"GY": 2.2,"HT": 6.5,"HN": 15.34,"HK": 226.49,"HU": 132.28,"IS": 12.77,"IN": 1430.02,"ID": 695.06,"IR": 337.9,"IQ": 84.14,"IE": 204.14,"IL": 201.25,"IT": 2036.69,"JM": 13.74,"JP": 5390.9,"JO": 27.13,"KZ": 129.76,"KE": 32.42,"KI": 0.15,"KR": 986.26,"UNDEFINED": 5.73,"KW": 117.32,"KG": 4.44,"LA": 6.34,"LV": 23.39,"LB": 39.15,"LS": 1.8,"LR": 0.98,"LY": 77.91,"LT": 35.73,"LU": 52.43,"MK": 9.58,"MG": 8.33,"MW": 5.04,"MY": 218.95,"MV": 1.43,"ML": 9.08,"MT": 7.8,"MR": 3.49,"MU": 9.43,"MX": 1004.04,"MD": 5.36,"MN": 5.81,"ME": 3.88,"MA": 91.7,"MZ": 10.21,"MM": 35.65,"NA": 11.45,"NP": 15.11,"NL": 770.31,"NZ": 138,"NI": 6.38,"NE": 5.6,"NG": 206.66,"NO": 413.51,"OM": 53.78,"PK": 174.79,"PA": 27.2,"PG": 8.81,"PY": 17.17,"PE": 153.55,"PH": 189.06,"PL": 438.88,"PT": 223.7,"QA": 126.52,"RO": 158.39,"RU": 1476.91,"RW": 5.69,"WS": 0.55,"ST": 0.19,"SA": 434.44,"SN": 12.66,"RS": 38.92,"SC": 0.92,"SL": 1.9,"SG": 217.38,"SK": 86.26,"SI": 46.44,"SB": 0.67,"ZA": 354.41,"ES": 1374.78,"LK": 48.24,"KN": 0.56,"LC": 1,"VC": 0.58,"SD": 65.93,"SR": 3.3,"SZ": 3.17,"SE": 444.59,"CH": 522.44,"SY": 59.63,"TW": 426.98,"TJ": 5.58,"TZ": 22.43,"TH": 312.61,"TL": 0.62,"TG": 3.07,"TO": 0.3,"TT": 21.2,"TN": 43.86,"TR": 729.05,"TM": 0,"UG": 17.12,"UA": 136.56,"AE": 239.65,"GB": 2258.57,"US": 14624.18,"UY": 40.71,"UZ": 37.72,"VU": 0.72,"VE": 285.21,"VN": 101.99,"YE": 30.02,"ZM": 15.69,"ZW": 5.57*/
/* };*/
/* */
/* $(function(){*/
/*   $('#world-map-gdp').vectorMap({*/
/*     map: 'world_mill_en',*/
/*     series: {*/
/*       regions: [{*/
/*         values: gdpData,*/
/*         scale: ['#C8EEFF', '#0071A4'],*/
/*         normalizeFunction: 'polynomial'*/
/*       }]*/
/*     },*/
/*     onLabelShow: function(e, el, code){*/
/*       el.html(el.html()+' (GDP - '+gdpData[code]+')');*/
/*     }*/
/*   });*/
/* });*/
/* */
/* $(function(){*/
/*   $('#world-map-markers').vectorMap({*/
/*     map: 'world_mill_en',*/
/*     scaleColors: ['#C8EEFF', '#0071A4'],*/
/*     normalizeFunction: 'polynomial',*/
/*     hoverOpacity: 0.7,*/
/*     hoverColor: false,*/
/*     markerStyle: {*/
/*       initial: {*/
/*         fill: '#F8E23B',*/
/*         stroke: '#383f47'*/
/*       }*/
/*     },*/
/*     backgroundColor: '#383f47',*/
/*     markers: [*/
/*       {latLng: [41.90, 12.45], name: 'Vatican City'},*/
/*       {latLng: [43.73, 7.41], name: 'Monaco'},*/
/*       {latLng: [-0.52, 166.93], name: 'Nauru'},*/
/*       {latLng: [-8.51, 179.21], name: 'Tuvalu'},*/
/*       {latLng: [43.93, 12.46], name: 'San Marino'},*/
/*       {latLng: [47.14, 9.52], name: 'Liechtenstein'},*/
/*       {latLng: [7.11, 171.06], name: 'Marshall Islands'},*/
/*       {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},*/
/*       {latLng: [3.2, 73.22], name: 'Maldives'},*/
/*       {latLng: [35.88, 14.5], name: 'Malta'},*/
/*       {latLng: [12.05, -61.75], name: 'Grenada'},*/
/*       {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},*/
/*       {latLng: [13.16, -59.55], name: 'Barbados'},*/
/*       {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},*/
/*       {latLng: [-4.61, 55.45], name: 'Seychelles'},*/
/*       {latLng: [7.35, 134.46], name: 'Palau'},*/
/*       {latLng: [42.5, 1.51], name: 'Andorra'},*/
/*       {latLng: [14.01, -60.98], name: 'Saint Lucia'},*/
/*       {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},*/
/*       {latLng: [1.3, 103.8], name: 'Singapore'},*/
/*       {latLng: [1.46, 173.03], name: 'Kiribati'},*/
/*       {latLng: [-21.13, -175.2], name: 'Tonga'},*/
/*       {latLng: [15.3, -61.38], name: 'Dominica'},*/
/*       {latLng: [-20.2, 57.5], name: 'Mauritius'},*/
/*       {latLng: [26.02, 50.55], name: 'Bahrain'},*/
/*       {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}*/
/*     ]*/
/*   });*/
/* });*/
/* */
/* $(function(){*/
/*   var map,*/
/*       markers = [*/
/*         {latLng: [52.50, 13.39], name: 'Berlin'},*/
/*         {latLng: [53.56, 10.00], name: 'Hamburg'},*/
/*         {latLng: [48.13, 11.56], name: 'Munich'},*/
/*         {latLng: [50.95, 6.96], name: 'Cologne'},*/
/*         {latLng: [50.11, 8.68], name: 'Frankfurt am Main'},*/
/*         {latLng: [48.77, 9.17], name: 'Stuttgart'},*/
/*         {latLng: [51.23, 6.78], name: 'Düsseldorf'},*/
/*         {latLng: [51.51, 7.46], name: 'Dortmund'},*/
/*         {latLng: [51.45, 7.01], name: 'Essen'},*/
/*         {latLng: [53.07, 8.80], name: 'Bremen'}*/
/*       ],*/
/*       cityAreaData = [*/
/*         887.70,*/
/*         755.16,*/
/*         310.69,*/
/*         405.17,*/
/*         248.31,*/
/*         207.35,*/
/*         217.22,*/
/*         280.71,*/
/*         210.32,*/
/*         325.42*/
/*       ]*/
/* */
/*   map = new jvm.WorldMap({*/
/*     container: $('#map-hu'),*/
/*     map: 'de_merc_en',*/
/*     regionsSelectable: true,*/
/*     markersSelectable: true,*/
/*     markers: markers,*/
/*     markerStyle: {*/
/*       initial: {*/
/*         fill: '#4DAC26'*/
/*       },*/
/*       selected: {*/
/*         fill: '#CA0020'*/
/*       }*/
/*     },*/
/*     regionStyle: {*/
/*       initial: {*/
/*         fill: '#B8E186'*/
/*       },*/
/*       selected: {*/
/*         fill: '#F4A582'*/
/*       }*/
/*     },*/
/*     series: {*/
/*       markers: [{*/
/*         attribute: 'r',*/
/*         scale: [5, 15],*/
/*         values: cityAreaData*/
/*       }]*/
/*     },*/
/*     onRegionSelected: function(){*/
/*       if (window.localStorage) {*/
/*         window.localStorage.setItem(*/
/*           'jvectormap-selected-regions',*/
/*           JSON.stringify(map.getSelectedRegions())*/
/*         );*/
/*       }*/
/*     },*/
/*     onMarkerSelected: function(){*/
/*       if (window.localStorage) {*/
/*         window.localStorage.setItem(*/
/*           'jvectormap-selected-markers',*/
/*           JSON.stringify(map.getSelectedMarkers())*/
/*         );*/
/*       }*/
/*     }*/
/*   });*/
/*   map.setSelectedRegions( JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ) );*/
/*   map.setSelectedMarkers( JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ) );*/
/* });*/
/* */
/* $(function(){*/
/*   $('#mall-map').vectorMap({*/
/*     map: 'mall',*/
/*     backgroundColor: 'transparent',*/
/*     markers: [{*/
/*       coords: [60, 110],*/
/*       name: 'Escalator 1',*/
/*       style: {fill: 'yellow'}*/
/*     },{*/
/*       coords: [260, 95],*/
/*       name: 'Escalator 2',*/
/*       style: {fill: 'yellow'}*/
/*     },{*/
/*       coords: [434, 95],*/
/*       name: 'Escalator 3',*/
/*       style: {fill: 'yellow'}*/
/*     },{*/
/*       coords: [634, 110],*/
/*       name: 'Escalator 4',*/
/*       style: {fill: 'yellow'}*/
/*     }],*/
/*     series: {*/
/*       regions: [{*/
/*         values: {*/
/*           F102: 'SPORTS & OUTDOOR',*/
/*           F103: 'HOME DECOR',*/
/*           F105: 'FASHION',*/
/*           F106: 'OTHER',*/
/*           F108: 'BEAUTY & SPA',*/
/*           F109: 'FASHION',*/
/*           F110: 'BEAUTY & SPA',*/
/*           F111: 'URBAN FAVORITES',*/
/*           F114: 'SERVICES',*/
/*           F166: 'DINING',*/
/*           F167: 'FASHION',*/
/*           F169: 'DINING',*/
/*           F170: 'ENTERTAINMENT',*/
/*           F172: 'DINING',*/
/*           F174: 'DINING',*/
/*           F115: 'KIDS STUFF',*/
/*           F117: 'LIFESTYLE',*/
/*           F118: 'URBAN FAVORITES',*/
/*           F119: 'FASHION',*/
/*           F120: 'FASHION',*/
/*           F122: 'KIDS STUFF',*/
/*           F124: 'KIDS STUFF',*/
/*           F125: 'KIDS STUFF',*/
/*           F126: 'KIDS STUFF',*/
/*           F128: 'KIDS STUFF',*/
/*           F129: 'LIFESTYLE',*/
/*           F130: 'HOME DECOR',*/
/*           F132: 'DINING',*/
/*           F133: 'SPORTS & OUTDOOR',*/
/*           F134: 'KIDS STUFF',*/
/*           F135: 'LIFESTYLE',*/
/*           F136: 'LIFESTYLE',*/
/*           F139: 'KIDS STUFF',*/
/*           F153: 'DINING',*/
/*           F155: 'FASHION',*/
/*           F156: 'URBAN FAVORITES',*/
/*           F157: 'URBAN FAVORITES',*/
/*           F158: 'LINGERIE & UNDERWEAR',*/
/*           F159: 'FASHION',*/
/*           F160: 'FASHION',*/
/*           F162: 'FASHION',*/
/*           F164: 'FASHION',*/
/*           F165: 'FASHION',*/
/*           FR01: 'REST ROOMS',*/
/*           FR02: 'REST ROOMS',*/
/*           FR03: 'REST ROOMS',*/
/*           FR04: 'REST ROOMS',*/
/*           FFC: 'DINING'*/
/*         },*/
/*         scale: {*/
/*           "FASHION": "#2761ad",*/
/*           "LINGERIE & UNDERWEAR": "#d58aa3",*/
/*           "BEAUTY & SPA": "#ee549f",*/
/*           "URBAN FAVORITES": "#15bbba",*/
/*           "SPORTS & OUTDOOR": "#8864ab",*/
/*           "KIDS STUFF": "#ef4e36",*/
/*           "ENTERTAINMENT": "#e47325",*/
/*           "HOME DECOR": "#a2614f",*/
/*           "LIFESTYLE": "#8a8934",*/
/*           "DINING": "#73bb43",*/
/*           "REST ROOMS": "#6c260f",*/
/*           "SERVICES": "#504d7c",*/
/*           "OTHER": "#c7b789"*/
/*         }*/
/*       }]*/
/*     },*/
/*     onRegionLabelShow: function(e, el, code){*/
/*       if (el.html() === '') {*/
/*         e.preventDefault();*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* */
/* </script>*/
/* */
/* */
/* */
/* <h3>World map</h3>*/
/* <p class="font-gray-dark">*/
/*     This is a basic world map example.*/
/* </p>*/
/* */
/* <div class="example-box">*/
/*     <div class="example-code clearfix">*/
/* */
/*       <div id="world-map-gdp" class="col-md-6" style="height: 350px;"></div>*/
/* */
/*     </div>*/
/*     */
/* </div>*/
/* */
/* <h3>Markers</h3>*/
/* <p class="font-gray-dark">*/
/*     This is a basic world map with markers example.*/
/* </p>*/
/* */
/* <div class="example-box">*/
/*     <div class="example-code clearfix">*/
/* */
/*       <div id="world-map-markers" class="col-md-6" style="height: 350px;"></div>*/
/* */
/*     </div>*/
/*     */
/* </div>*/
/* */
/* <h3>Region selection</h3>*/
/* <p class="font-gray-dark">*/
/*     This vector map uses the map js file.*/
/* </p>*/
/* */
/* <div class="infobox notice-bg">*/
/*     <div class="bg-yellow large btn info-icon">*/
/*         <i class="glyph-icon icon-thumbs-up-alt"></i>*/
/*     </div>*/
/*     <h4 class="infobox-title">Maps</h4>*/
/*     <p>You can download more free maps <a href="http://jvectormap.com/maps/world/europe/" target="_blank" title="Download maps">here</a>.</p>*/
/* </div>*/
/* */
/* <div class="example-box">*/
/*     <div class="example-code clearfix">*/
/* */
/*       <div id="map-hu" class="col-md-6" style="height: 350px;"></div>*/
/* */
/*     </div>*/
/*     */
/* </div>*/
/* */
/* */
/* <h3>Region selection</h3>*/
/* <p class="font-gray-dark">*/
/*     This vector map uses the map js file.*/
/* </p>*/
/* */
/* <div class="infobox notice-bg">*/
/*     <div class="bg-yellow large btn info-icon">*/
/*         <i class="glyph-icon icon-thumbs-up-alt"></i>*/
/*     </div>*/
/*     <h4 class="infobox-title">Maps</h4>*/
/*     <p>You can download more free maps <a href="http://jvectormap.com/maps/world/europe/" target="_blank" title="Download maps">here</a>.</p>*/
/* </div>*/
/* */
/* <div class="example-box">*/
/*     <div class="example-code clearfix">*/
/* */
/*       <div id="mall-map" class="col-md-6" style="height: 350px;"></div>*/
/* */
/*     </div>*/
/*     */
/* </div>*/
/* */
/* */
/*                 	</div><!-- #page-content -->*/
/*             </div><!-- #page-main -->*/
/*         </div><!-- #page-wrapper -->*/
/* */
/*     </body>*/
/* </html>*/
/* */