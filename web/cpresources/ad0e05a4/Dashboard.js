(function(){var __webpack_modules__={242:function(){},277:function(t,e,i){var n=i(242);n.__esModule&&(n=n.default),"string"==typeof n&&(n=[[t.id,n,""]]),n.locals&&(t.exports=n.locals),(0,i(673).Z)("32dd7842",n,!0,{})},673:function(t,e,i){"use strict";function n(t,e){for(var i=[],n={},s=0;s<e.length;s++){var a=e[s],r=a[0],d={id:t+":"+s,css:a[1],media:a[2],sourceMap:a[3]};n[r]?n[r].parts.push(d):i.push(n[r]={id:r,parts:[d]})}return i}i.d(e,{Z:function(){return u}});var s="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!s)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var a={},r=s&&(document.head||document.getElementsByTagName("head")[0]),d=null,o=0,l=!1,h=function(){},c=null,g="data-vue-ssr-id",p="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function u(t,e,i,s){l=i,c=s||{};var r=n(t,e);return f(r),function(e){for(var i=[],s=0;s<r.length;s++){var d=r[s];(o=a[d.id]).refs--,i.push(o)}for(e?f(r=n(t,e)):r=[],s=0;s<i.length;s++){var o;if(0===(o=i[s]).refs){for(var l=0;l<o.parts.length;l++)o.parts[l]();delete a[o.id]}}}}function f(t){for(var e=0;e<t.length;e++){var i=t[e],n=a[i.id];if(n){n.refs++;for(var s=0;s<n.parts.length;s++)n.parts[s](i.parts[s]);for(;s<i.parts.length;s++)n.parts.push($(i.parts[s]));n.parts.length>i.parts.length&&(n.parts.length=i.parts.length)}else{var r=[];for(s=0;s<i.parts.length;s++)r.push($(i.parts[s]));a[i.id]={id:i.id,refs:1,parts:r}}}}function m(){var t=document.createElement("style");return t.type="text/css",r.appendChild(t),t}function $(t){var e,i,n=document.querySelector("style["+g+'~="'+t.id+'"]');if(n){if(l)return h;n.parentNode.removeChild(n)}if(p){var s=o++;n=d||(d=m()),e=v.bind(null,n,s,!1),i=v.bind(null,n,s,!0)}else n=m(),e=_.bind(null,n),i=function(){n.parentNode.removeChild(n)};return e(t),function(n){if(n){if(n.css===t.css&&n.media===t.media&&n.sourceMap===t.sourceMap)return;e(t=n)}else i()}}var w,b=(w=[],function(t,e){return w[t]=e,w.filter(Boolean).join("\n")});function v(t,e,i,n){var s=i?"":n.css;if(t.styleSheet)t.styleSheet.cssText=b(e,s);else{var a=document.createTextNode(s),r=t.childNodes;r[e]&&t.removeChild(r[e]),r.length?t.insertBefore(a,r[e]):t.appendChild(a)}}function _(t,e){var i=e.css,n=e.media,s=e.sourceMap;if(n&&t.setAttribute("media",n),c.ssrId&&t.setAttribute(g,e.id),s&&(i+="\n/*# sourceURL="+s.sources[0]+" */",i+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */"),t.styleSheet)t.styleSheet.cssText=i;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(i))}}}},__webpack_module_cache__={};function __webpack_require__(t){var e=__webpack_module_cache__[t];if(void 0!==e)return e.exports;var i=__webpack_module_cache__[t]={id:t,exports:{}};return __webpack_modules__[t](i,i.exports,__webpack_require__),i.exports}__webpack_require__.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return __webpack_require__.d(e,{a:e}),e},__webpack_require__.d=function(t,e){for(var i in e)__webpack_require__.o(e,i)&&!__webpack_require__.o(t,i)&&Object.defineProperty(t,i,{enumerable:!0,get:e[i]})},__webpack_require__.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var __webpack_exports__={};!function(){"use strict";var _dashboard_scss__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(277),_dashboard_scss__WEBPACK_IMPORTED_MODULE_0___default=__webpack_require__.n(_dashboard_scss__WEBPACK_IMPORTED_MODULE_0__);(function($){Craft.Dashboard=Garnish.Base.extend({$grid:null,$widgetManagerBtn:null,$newWidgetBtn:null,widgetTypes:null,grid:null,widgets:null,widgetManager:null,widgetAdminTable:null,widgetSettingsModal:null,init:function(t){var e=this;this.widgetTypes=t,this.widgets={},this.$widgetManagerBtn=$("#widgetManagerBtn"),this.$newWidgetBtn=$("#newwidgetmenubtn"),this.addListener(this.$widgetManagerBtn,"click","showWidgetManager"),Garnish.$doc.ready((function(){e.$grid=$("#dashboard-grid"),e.grid=e.$grid.data("grid"),e.addListener("#new-widget-menu a","click",(function(t){t.preventDefault(),e.handleNewWidgetOptionSelect(t)})),e.addListener("#new-widget-menu a","keydown",(function(t){t.keyCode!==Garnish.SPACE_KEY&&t.keyCode!==Garnish.RETURN_KEY||(t.preventDefault(),e.handleNewWidgetOptionSelect(t))}))}))},getTypeInfo:function(t,e,i){return e?void 0===this.widgetTypes[t][e]?i:this.widgetTypes[t][e]:this.widgetTypes[t]},handleNewWidgetOptionSelect:function(t){this.$newWidgetBtn.data("trigger").hide();var e=$(t.target);this.createWidget(e.data("type"),e.data("name"))},createWidget:function createWidget(type,name,responseData){var settingsNamespace=void 0===responseData?"newwidget".concat(Math.floor(1e9*Math.random()),"-settings"):"widget".concat(responseData.id,"-settings"),settingsHtml=void 0===responseData?this.getTypeInfo(type,"settingsHtml","").replace(/__NAMESPACE__/g,settingsNamespace):null,settingsJs=void 0===responseData?this.getTypeInfo(type,"settingsJs","").replace(/__NAMESPACE__/g,settingsNamespace):null,$gridItem=$('<div class="item" data-colspan="1" style="display: block">'),$container=$("<div/>",{class:"widget new loading-new scaleout","data-type":type}).addClass(type.toLowerCase()).append($("<div/>",{class:"front"}).append($("<div/>",{class:"pane"}).append($("<div/>",{class:"spinner body-loading"})).append($("<div/>",{class:"widget-heading"}).append("<h2/>").append("<h5/>")).append($("<div/>",{class:"body"})).append($("<div/>",{class:"settings icon hidden"})))).append($("<div/>",{class:"back"}).append($("<form/>",{class:"pane"}).append($("<input/>",{type:"hidden",name:"type",value:type})).append($("<input/>",{type:"hidden",name:"settingsNamespace",value:settingsNamespace})).append($("<h2/>",{class:"first",text:Craft.t("app","{type} Settings",{type:name})})).append($("<div/>",{class:"settings"})).append("<hr/>").append($("<div/>",{class:"buttons clearafter"}).append(Craft.ui.createSubmitButton({label:Craft.t("app","Save"),spinner:!0})).append($("<button/>",{type:"button",class:"btn",text:Craft.t("app","Cancel")}))))).appendTo($gridItem);settingsHtml?($container.addClass("flipped"),$container.children(".front").addClass("hidden")):($container.addClass("loading"),$container.children(".back").addClass("hidden"));var widget=new Craft.Widget($container,settingsHtml?settingsHtml.replace(/__NAMESPACE__/g,settingsNamespace):null,settingsJs?function(){eval(settingsJs)}:$.noop);if(this.grid.$items.length?$gridItem.insertAfter(this.grid.$items.last()):$gridItem.prependTo(this.grid.$container),this.grid.addItems($gridItem),Garnish.scrollContainerToElement($gridItem),$container.removeClass("scaleout"),void 0!==responseData)$container.removeClass("loading"),widget.update(responseData);else if(!settingsHtml){var data={type:type};Craft.queue.push((function(){return new Promise((function(t){Craft.sendActionRequest("POST","dashboard/create-widget",{data:data}).then((function(t){$container.removeClass("loading"),widget.update(t.data)})).catch((function(){widget.destroy()})).finally(t)}))}))}},showWidgetManager:function(){var t=this;if(this.widgetManager)this.widgetManager.show();else{for(var e=this.$grid.find("> .item > .widget"),i=$('<form method="post" accept-charset="UTF-8"><input type="hidden" name="action" value="widgets/save-widget"/></form>').appendTo(Garnish.$bod),n=$('<p id="nowidgets" class="zilch small'+(e.length?" hidden":"")+'">'+Craft.t("app","You don’t have any widgets yet.")+"</p>").appendTo(i),s=$('<table class="data'+(e.length?"":" hidden")+'" role="presentation"/>').appendTo(i),a=$("<tbody/>").appendTo(s),r=0;r<e.length;r++){var d=e.eq(r).data("widget");d&&d.id&&d.getManagerRow().appendTo(a)}this.widgetManager=new Garnish.HUD(this.$widgetManagerBtn,i,{hudClass:"hud widgetmanagerhud",onShow:function(){t.$widgetManagerBtn.addClass("active").attr("aria-expanded","true")},onHide:function(){t.$widgetManagerBtn.removeClass("active").attr("aria-expanded","false")}}),this.widgetAdminTable=new Craft.AdminTable({tableSelector:s,noObjectsSelector:n,sortable:!0,reorderAction:"dashboard/reorder-user-widgets",deleteAction:"dashboard/delete-user-widget",confirmDeleteMessage:null,deleteSuccessMessage:null,noItemsSelector:"#nowidgets",onReorderItems:function(e){for(var i=null,n=0;n<e.length;n++){var s=t.widgets[e[n]];i?s.$gridItem.insertAfter(i.$gridItem):s.$gridItem.prependTo(t.$grid),i=s}t.grid.resetItemOrder()},onDeleteItem:function(e){var i=t.widgets[e];i.destroy();var n=Craft.ui.createButton({label:Craft.t("app","Undo"),spinner:!0}),s=Craft.cp.displaySuccess(Craft.t("app","“{name}” deleted.",{name:i.getLabel()}),{details:n});n.on("click",(function(){if(!n.hasClass("loading")){n.addClass("loading");var e={type:i.type,settings:i.storedSettings};Craft.sendActionRequest("POST","dashboard/create-widget",{data:e}).then((function(e){t.createWidget(i.type,i.getLabel(),e.data),n.off("click"),s.close()})).finally((function(){n.removeClass("loading")}))}}))}})}}}),Craft.Widget=Garnish.Base.extend({$container:null,$gridItem:null,$front:null,$settingsBtn:null,$title:null,$subtitle:null,$heading:null,$bodyContainer:null,$back:null,$settingsForm:null,$settingsContainer:null,$settingsToggle:null,$saveBtn:null,$settingsErrorList:null,id:null,type:null,title:null,subtitle:null,storedSettings:null,totalCols:null,settingsHtml:null,initSettingsFn:null,showingSettings:!1,colspanPicker:null,init:function(t,e,i,n){this.$container=$(t),this.storedSettings=n,this.$settingsToggle=this.$container.find("[data-settings-toggle]"),this.$gridItem=this.$container.parent(),this.$container.data("widget",this),this.id=this.$container.data("id"),this.type=this.$container.data("type"),this.title=this.$container.data("title"),this.id&&(window.dashboard.widgets[this.id]=this),this.$front=this.$container.children(".front"),this.$settingsBtn=this.$front.find("> .pane > .icon.settings"),this.$heading=this.$front.find("> .pane > .widget-heading"),this.$title=this.$heading.find("> h2"),this.$subtitle=this.$heading.find("> h5"),this.$bodyContainer=this.$front.find("> .pane > .body"),this.setSettingsHtml(e,i),this.$container.hasClass("flipped")?(this.initBackUi(),this.refreshSettings(),this.onShowBack()):this.onShowFront(),this.addListener(this.$settingsBtn,"click","showSettings")},initBackUi:function(){this.$back=this.$container.children(".back"),this.$settingsForm=this.$back.children("form"),this.$settingsContainer=this.$settingsForm.children(".settings");var t=this.$settingsForm.children(".buttons");this.$saveBtn=t.children("button[type=submit]"),this.addListener(t.children(".btn:nth-child(2)"),"click","cancelSettings"),this.addListener(this.$settingsForm,"submit","saveSettings")},getColspan:function(){return this.$gridItem.data("colspan")},setColspan:function(t){this.$gridItem.data("colspan",t).attr("data-colspan",t),window.dashboard.grid.refreshCols(!0)},getTypeInfo:function(t,e){return window.dashboard.getTypeInfo(this.type,t,e)},setSettingsHtml:function(t,e){this.settingsHtml=t,this.initSettingsFn=e,this.settingsHtml?this.$settingsBtn.removeClass("hidden"):this.$settingsBtn.addClass("hidden")},refreshSettings:function(){var t=this;this.$settingsContainer.html(this.settingsHtml),Garnish.requestAnimationFrame((function(){Craft.initUiElements(t.$settingsContainer),t.initSettingsFn()}))},showSettings:function(){var t=this;this.$back||this.initBackUi(),this.refreshSettings(),this.$back.removeClass("hidden"),setTimeout((function(){t.$container.addClass("flipped").velocity({height:t.$back.height()},{complete:t.onShowBack.bind(t)})}),100)},hideSettings:function(){var t=this;this.$front.removeClass("hidden"),setTimeout((function(){t.$container.removeClass("flipped").velocity({height:t.$front.height()},{complete:t.onShowFront.bind(t)}),t.$settingsToggle.focus()}),100)},saveSettings:function(t){var e=this;t.preventDefault(),this.$saveBtn.hasClass("loading")||(this.$saveBtn.addClass("loading"),Craft.queue.push((function(){return new Promise((function(t){var i=e.$container.hasClass("new")?"dashboard/create-widget":"dashboard/save-widget-settings",n=e.$settingsForm.serialize();Craft.sendActionRequest("POST",i,{data:n}).then((function(t){e.$settingsErrorList&&(e.$settingsErrorList.remove(),e.$settingsErrorList=null),Craft.cp.displaySuccess(Craft.t("app","Widget saved.")),t.data.info?(e.update(t.data),e.hideSettings()):e.destroy()})).catch((function(t){var i=t.response;e.$settingsErrorList&&(e.$settingsErrorList.remove(),e.$settingsErrorList=null),Craft.cp.displayError(Craft.t("app","Couldn’t save widget.")),i.data.errors&&(e.$settingsErrorList=Craft.ui.createErrorList(i.data.errors).insertAfter(e.$settingsContainer))})).finally((function(){e.$saveBtn.removeClass("loading"),t()}))}))})))},update:function update(response){this.$back||this.initBackUi(),this.title=response.info.title,this.subtitle=response.info.subtitle,this.storedSettings=response.info.settings,this.$container.hasClass("new")?(this.id=response.info.id,this.$container.attr("id","widget"+this.id).removeClass("new loading-new"),this.$settingsForm&&this.$settingsForm.prepend('<input type="hidden" name="widgetId" value="'+this.id+'"/>'),window.dashboard.widgets[this.id]=this,window.dashboard.widgetAdminTable&&window.dashboard.widgetAdminTable.addRow(this.getManagerRow())):window.dashboard.widgetAdminTable&&window.dashboard.widgetAdminTable.$tbody.children('[data-id="'+this.id+'"]:first').children("td:nth-child(2)").html(this.getManagerRowLabel()),this.title||this.subtitle?(this.title?this.$title.text(this.title):this.$title.remove(),this.subtitle?this.$subtitle.text(this.subtitle):this.$subtitle.remove()):this.$heading.remove(),this.$bodyContainer.html(response.info.bodyHtml),response.info.colspan!=this.getColspan()&&(this.setColspan(response.info.colspan),Garnish.scrollContainerToElement(this.$gridItem)),Craft.initUiElements(this.$bodyContainer),Craft.appendHeadHtml(response.headHtml),Craft.appendBodyHtml(response.bodyHtml),this.setSettingsHtml(response.info.settingsHtml,(function(){eval(response.info.settingsJs)}))},cancelSettings:function(){this.id?this.hideSettings():this.destroy()},onShowFront:function(){this.showingSettings=!1,this.removeListener(this.$back,"resize"),this.addListener(this.$front,"resize","updateContainerHeight"),this.$back&&this.$back.addClass("hidden")},onShowBack:function(){var t=this;this.showingSettings=!0,this.removeListener(this.$front,"resize"),this.addListener(this.$back,"resize","updateContainerHeight"),this.$front.addClass("hidden"),setTimeout((function(){t.$settingsForm.find(":focusable:first").trigger("focus")}),1)},updateContainerHeight:function(){this.$container.height((this.showingSettings?this.$back:this.$front).height())},getWidgetLabelId:function(){return"widget-label-".concat(this.id)},getManagerRow:function(){var t=this,e=$('<tr data-id="'+this.id+'" data-name="'+(this.title?Craft.escapeHtml(this.title):this.getTypeInfo("name"))+'"><td class="widgetmanagerhud-icon thin">'+this.getTypeInfo("iconSvg")+'</td><td id="'+this.getWidgetLabelId()+'">'+this.getManagerRowLabel()+'</td><td class="widgetmanagerhud-col-colspan-picker thin"></td><td class="widgetmanagerhud-col-move thin"><a class="move icon" title="'+Craft.t("app","Reorder")+'" role="button"></a></td><td class="thin"><a class="delete icon" tabindex="0" type="button" title="'+Craft.t("app","Delete")+'" role="button" aria-label="'+Craft.t("app","Delete")+'" aria-describedby="'+this.getWidgetLabelId()+'"></a></td></tr>');return this.colspanPicker=new Craft.SlidePicker(this.getColspan(),{min:1,max:function(){return window.dashboard.grid.totalCols},step:1,label:Craft.t("app","Number of columns"),describedBy:this.getWidgetLabelId(),valueLabel:function(t){return Craft.t("app","{num, number} {num, plural, =1{column} other{columns}}",{num:t})},onChange:function(e){t.setColspan(e),window.dashboard.grid.refreshCols(!0);var i={id:t.id,colspan:e};Craft.sendActionRequest("POST","dashboard/change-widget-colspan",{data:i}).then((function(t){Craft.cp.displaySuccess(Craft.t("app","Widget saved."))})).catch((function(t){t.response,Craft.cp.displayError(Craft.t("app","Couldn’t save widget."))}))}}),this.colspanPicker.$container.appendTo(e.find("> td.widgetmanagerhud-col-colspan-picker")),window.dashboard.grid.on("refreshCols",(function(){t.colspanPicker.refresh()})),e},getLabel:function(){return this.title||this.getTypeInfo("name")},getManagerRowLabel:function(){var t=this.getTypeInfo("name");return this.title?Craft.escapeHtml(this.title)+(this.title!==t?' <span class="light">('+t+")</span>":""):t},destroy:function(){var t=this;delete window.dashboard.widgets[this.id],this.$container.addClass("scaleout"),this.base(),setTimeout((function(){window.dashboard.grid.removeItems(t.$gridItem),t.$gridItem.remove()}),200)}})})(jQuery)}()})();
//# sourceMappingURL=Dashboard.js.map