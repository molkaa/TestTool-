<?php

/* @TSAdmin/right.html.twig */
class __TwigTemplate_5fea6d636a9aa201fa536f65ec04a6867202115c6af5ea48fa5cdb688dc04b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'right' => array($this, 'block_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b2f8719905d716f1b57bc6b3fdd8ed2191283081d2468e419ad535cc5aada7e = $this->env->getExtension("native_profiler");
        $__internal_2b2f8719905d716f1b57bc6b3fdd8ed2191283081d2468e419ad535cc5aada7e->enter($__internal_2b2f8719905d716f1b57bc6b3fdd8ed2191283081d2468e419ad535cc5aada7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/right.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('right', $context, $blocks);
        
        $__internal_2b2f8719905d716f1b57bc6b3fdd8ed2191283081d2468e419ad535cc5aada7e->leave($__internal_2b2f8719905d716f1b57bc6b3fdd8ed2191283081d2468e419ad535cc5aada7e_prof);

    }

    public function block_right($context, array $blocks = array())
    {
        $__internal_c5e83342e2f38ee37c785766845349b07e06c7ea546beb7646ffbae583bdfa4b = $this->env->getExtension("native_profiler");
        $__internal_c5e83342e2f38ee37c785766845349b07e06c7ea546beb7646ffbae583bdfa4b->enter($__internal_c5e83342e2f38ee37c785766845349b07e06c7ea546beb7646ffbae583bdfa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_c5e83342e2f38ee37c785766845349b07e06c7ea546beb7646ffbae583bdfa4b->leave($__internal_c5e83342e2f38ee37c785766845349b07e06c7ea546beb7646ffbae583bdfa4b_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/right.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block right %}*/
/* {% endblock %}*/
/* {#<div id="menu-right" class="scrollable-content hidden">*/
/*                 {% block right %}*/
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
/*                 </div>*/
/*                 {% endblock %}*/
/*             </div>#}*/
