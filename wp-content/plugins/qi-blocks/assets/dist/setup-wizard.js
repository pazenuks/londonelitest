!function(e){"use strict";e(document).ready((function(){t.init()}));const t={init:function(){const t=e(".qodef-admin-page-wrapper.qodef--setup-wizard");if(t.length){const e=t.find(".qodef-setup-wizard-form");this.initActions(t,e),this.initConfigurationStep(e),this.initElementsStep(e),this.initFinalizeStep(e)}},initActions:function(e,i){const n=e.find(".qodef-setup-wizard-actions");if(n.length){let e=n.find(".qodef-btn.qodef--next"),d=n.find(".qodef-btn.qodef--prev"),s=n.find(".qodef-btn.qodef--skip"),o=i.find(".qodef-m-nav-item"),a=i.find(".qodef-setup-wizard-content"),c=o.length;e.on("tap click",(function(e){e.preventDefault();let n=parseInt(i.attr("data-wizard-step"),10)+1;n>c&&(n=c),i.attr("data-wizard-step",n),o.removeClass("qodef--active"),o[n-1].classList.add("qodef--active"),a.removeClass("qodef--active"),a[n-1].classList.add("qodef--active"),t.setElementsStepWidgetsVisibility(i,n)})),d.on("tap click",(function(e){e.preventDefault();let n=parseInt(i.attr("data-wizard-step"),10)-1;n<1&&(n=1),i.attr("data-wizard-step",n),o.removeClass("qodef--active"),o[n-1].classList.add("qodef--active"),a.removeClass("qodef--active"),a[n-1].classList.add("qodef--active"),t.setElementsStepWidgetsVisibility(i,n)})),s.on("tap click",(function(e){e.preventDefault(),t.saveForm(i,!0)}))}},initConfigurationStep:function(t){if(t){const i=t.find(".qodef-m-elements-switcher-item");i.on("tap click",(function(){i.find(".qodef-e-input-field").each((function(){this.checked=!1})),e(this).find(".qodef-e-input-field")[0].checked=!0}))}},initElementsStep:function(t){t&&t.find('.qodef-widgets-section .qodef-widgets-item input[type="checkbox"]').on("change",(function(){this.checked&&e(this).parents(".qodef-widgets-item").addClass("qodef--checked")}))},setElementsStepWidgetsVisibility:function(e){if(e){const t=e.find('.qodef-widgets-section .qodef-widgets-item:not(.qodef-premium--disabled):not(.qodef--checked) input[type="checkbox"]'),i=e.find('.qodef-widgets-section .qodef-widgets-item.qodef-premium--enabled:not(.qodef--checked) input[type="checkbox"]'),n=e.find(".qodef-m-elements-switcher-item .qodef-e-input-field:checked").val();"all"===n?(t.each((function(){this.checked=!0})),i.length&&i.each((function(){this.checked=!0}))):"custom"===n&&(t.each((function(){this.checked=!1})),i.length&&i.each((function(){this.checked=!1})))}},initFinalizeStep:function(i){i&&i.find(".qodef-setup-wizard-form-trigger").on("tap click",(function(n){n.preventDefault();const d=e(this);d.siblings(".qodef-m-user-stats").val(d.attr("data-stats")),t.saveForm(i)}))},saveForm:function(t){let i={action:"qi_blocks_action_setup_wizard_save_options",skip_trigger:!!(arguments.length>1&&void 0!==arguments[1]&&arguments[1])||""};document.body.classList.add("qodef-setup-wizard--ajax-begin"),e.ajax({type:"POST",url:ajaxurl,cache:!1,data:e.param(i,!0)+"&"+t.serialize(),success:function(t){const i=e.parseJSON(t);setTimeout((function(){document.body.classList.add("qodef-setup-wizard--ajax-finished"),"success"===i.status&&(window.location=i.data.redirect_url),setTimeout((function(){document.body.classList.remove("qodef-setup-wizard--ajax-begin"),document.body.classList.remove("qodef-setup-wizard--ajax-finished")}),200)}),1e3)}})}}}(jQuery);