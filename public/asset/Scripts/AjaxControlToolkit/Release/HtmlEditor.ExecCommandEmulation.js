Sys.Extended.UI.HtmlEditor.MSIE_list=function(e){function t(){if(null!=o){var e;for(e=o.cloneNode(!1),o.parentNode.insertBefore(e,o);o.firstChild!=s[0];)e.appendChild(o.firstChild);if(null==e.firstChild&&e.parentNode.removeChild(e),o.tagName.toUpperCase()==h)for(var t=0;t<s.length;t++){var l=s[t];if(1==l.nodeType&&l.tagName&&"LI"==l.tagName.toUpperCase()){var n=!1;if(o.parentNode.insertBefore(l,o),""==l.style.textAlign&&(l.style.textAlign=o.style.textAlign),0==o.childNodes.length&&t==s.length-1&&(o.parentNode.removeChild(o),o=null),(""==l.style.textAlign||"left"==l.style.textAlign.toLowerCase()&&!d.rtlState()||"right"==l.style.textAlign.toLowerCase()&&d.rtlState())&&(n=d.tryUnWrap(l,r),n&&(p=!0)),!n){for(var i=d._doc.createElement(d.dfltBlockElement),a=l.attributes,g=0;g<a.length;++g){var m=a.item(g);m.specified&&"style"!=m.name.toLowerCase()&&i.setAttribute(m.name,m.value)}for(i.style.cssText=l.style.cssText,"P"==i.tagName.toUpperCase()&&(i.style.margin="0px");l.firstChild;)i.appendChild(l.firstChild);l.parentNode.insertBefore(i,l),l.parentNode.removeChild(l)}}else o.parentNode.insertBefore(l,o)}else{for(var e=d._doc.createElement(h),a=o.attributes,g=0;g<a.length;++g){var m=a.item(g);m.specified&&"style"!=m.name.toLowerCase()&&e.setAttribute(m.name,m.value)}e.style.cssText=o.style.cssText,o.parentNode.insertBefore(e,o);for(var t=0;t<s.length;t++){var l=s[t];e.appendChild(l)}}if(null!=o){for(e=o.cloneNode(!1),o.parentNode.insertBefore(e,o);o.firstChild;)e.appendChild(o.firstChild);null==e.firstChild&&e.parentNode.removeChild(e),o.parentNode.removeChild(o)}}o=null,s=[]}function l(){function e(){null!=N&&(1!=N.childNodes||N.firstChild!=r[0]&&N.firstChild!=r[1]||(N.parentNode.insertBefore(N.firstChild,N),N.parentNode.removeChild(N))),N=null}var l=i.firstChild,p=i.lastChild,g=i.tagName.toUpperCase();if(Sys.Extended.UI.HtmlEditor.isInlineElement(i)||a[0][0]!=l||a[a.length-1][a[a.length-1].length-1]!=p||"OL"!=g&&"UL"!=g&&"DL"!=g&&"LI"!=g&&("P"!=g&&"DIV"!=g&&!Sys.Extended.UI.HtmlEditor.isHeader(i)||"LI"!=g))if("LI"==g&&a.length<n.length)o!=i.parentNode&&(t(),o=i.parentNode,s=[]),s.push(i);else if("OL"==g||"UL"==g||"DL"==g){t(),o=i,s=[];for(var m=0;m<a.length;m++)for(var f=a[m],E=0;E<f.length;E++)s.push(f[E]);t()}else{var N=null,c=null;null!=o&&t();var y="";if(1==a.length&&1==a[0].length&&1==a[0][0].nodeType&&a[0][0].tagName&&(y=a[0][0].tagName.toUpperCase()),"OL"==y||"UL"==y||"DL"==y){var u=a[0][0];o=u,s=[];for(var m=0;m<u.childNodes.length;m++){var v=u.childNodes.item(m);s.push(v)}t()}else for(var m=0;m<a.length;m++){for(var f=a[m],E=0;E<f.length;E++){var u=f[E],S=u.tagName?u.tagName.toUpperCase():"";if(null==c&&(c=d._doc.createElement(h),u.parentNode.insertBefore(c,u)),Sys.Extended.UI.HtmlEditor.isInlineElement(u)||"BR"==S){null==N&&(N=d._doc.createElement("LI"),c.appendChild(N));var C=f[f.length-1]==r[1]?f.length-1:f.length,x=f[0]==r[0]?1:0;"BR"==S&&E==C-1&&E==x?Sys.Extended.UI.HtmlEditor.isIE?(N.appendChild(d._doc.createTextNode(String.fromCharCode(160))),u.parentNode.removeChild(u)):N.appendChild(u):"BR"==S&&E==C-1&&E>x?u.parentNode.removeChild(u):N.appendChild(u),"BR"==S&&E==f.length-1&&(e(),N=null),u==r[1]&&E==f.length-1&&(e(),N=null)}else N&&N.firstChild&&e(),null==N&&(N=d._doc.createElement("LI"),c.appendChild(N)),N.appendChild(u),e()}N&&N.firstChild&&e()}if(null!=c){for(var I=[],E=0;E<c.childNodes.length;E++)I.push(c.childNodes.item(E).style.textAlign);for(var U=1;U<I.length&&I[U-1]==I[U];U++);if(U==I.length){for(var _="left"==I[0]&&!d.rtlState()||"right"==I[0]&&d.rtlState()?"":I[0],E=0;E<c.childNodes.length;E++)c.childNodes.item(E).style.textAlign="";c.style.textAlign=_}}if(null!=c&&"P"==c.parentNode.tagName.toUpperCase()&&1==c.parentNode.childNodes.length){var H=c.parentNode,T=H.cloneNode(!1);if(H.parentNode.insertBefore(c,H),H.parentNode.removeChild(H),1==c.childNodes.length){for(var b=c.firstChild;b.firstChild;)T.appendChild(b.firstChild);b.appendChild(T)}else delete T}}else{if(t(),s=[],"LI"==g)o=i.parentNode,s.push(i);else if("P"==g||"DIV"==g||Sys.Extended.UI.HtmlEditor.isHeader(i))o=i.parentNode.parentNode,s.push(i.parentNode);else{o=i;for(var m=0;m<a.length;m++)for(var f=a[m],E=0;E<f.length;E++)s.push(f[E])}t()}}for(var n=this.get_paragraphs(),r=this.getSelectionAfterOperation(n),i=null,a=[],d=this,o=null,s=[],h=e.toUpperCase(),p=!1,g=0;g<n.length;g++){var m=n[g];m.length>0&&(m[0].parentNode!=i&&(a.length>0&&l(),a=[],i=m[0].parentNode),a.push(m))}a.length>0&&l(),null!=o&&t(),this.setSelectionAfterOperation(r,p)},Sys.Extended.UI.HtmlEditor.MSIE_justify=function(e,t,l){function n(e){null!=e&&(1!=e.childNodes||e.firstChild!=a[0]&&e.firstChild!=a[1]||(e.parentNode.insertBefore(e.firstChild,e),e.parentNode.removeChild(e)))}function r(){var t,l=d.firstChild,r=d.lastChild,i=!1;if(d.tagName&&!Sys.Extended.UI.HtmlEditor.isInlineElement(d)&&o[0][0]==l&&o[o.length-1][o[o.length-1].length-1]==r&&(t=d.tagName.toUpperCase(),"TD"!=t&&"TH"!=t&&"FIELDSET"!=t&&"LEGEND"!=t&&(i=!0)),i){var f="";if(d.getAttribute("align")&&d.getAttribute("align").length>0&&(f=d.getAttribute("align")),d.align&&d.align.length>0&&(f=d.align),d.style.textAlign&&d.style.textAlign.length>0&&(f=d.style.textAlign),d.align="",d.setAttribute("align",""),d.removeAttribute("align"),("DIV"==t||"P"==t||Sys.Extended.UI.HtmlEditor.isHeader(d))&&"left"==e&&h)s.tryUnWrap(d,a,h)&&(m=!0);else{if("remain"!=e&&("left"!=e||!h||"LI"==t&&d.parentNode.style.textAlign.length>0?d.style.textAlign=e:d.style.textAlign=""),h&&(d.style.margin="P"==t?"0px":""),"LI"==t){for(var E=d.parentNode,N=[],c=0;c<E.childNodes.length;c++)1==E.childNodes.item(c).nodeType&&N.push(E.childNodes.item(c).style.textAlign);for(var y=1;y<N.length&&N[y-1]==N[y];y++);if(y==N.length){for(var f="left"==N[0]&&h?"":N[0],u=0;u<E.childNodes.length;u++)1==E.childNodes.item(u).nodeType&&(E.childNodes.item(u).style.textAlign="",h&&(E.childNodes.item(u).style.margin="P"==E.childNodes.item(u).tagName.toUpperCase()?"0px":""));E.style.textAlign=f}}if(("DIV"==t||"P"==t||Sys.Extended.UI.HtmlEditor.isHeader(d))&&p&&g.toUpperCase()!=t){for(var v=s._doc.createElement(g),S=d.attributes,C=0;C<S.length;++C){var x=S.item(C);x.specified&&"style"!=x.name.toLowerCase()&&v.setAttribute(x.name,x.value)}for(v.style.cssText=d.style.cssText;d.firstChild;)v.appendChild(d.firstChild);d.parentNode.insertBefore(v,d),d.parentNode.removeChild(d)}}}else for(var I=null,U=0;U<o.length;U++){p||(I=null);for(var _=o[U],u=0;u<_.length;u++){var H=_[u],T=1==H.nodeType&&H.tagName?H.tagName.toUpperCase():null;if(null==T||"UL"!=T&&"OL"!=T&&"DL"!=T&&"DIV"!=T&&!Sys.Extended.UI.HtmlEditor.isHeader(H)&&"P"!=T&&"LI"!=T&&"TABLE"!=T){if("left"!=e||!h||p){null==I&&(I=s._doc.createElement(p?g:s.dfltBlockElement),"P"!=s.dfltBlockElement.toUpperCase()||p||(I.style.margin="0px"),p||(I.style.textAlign=e),H.parentNode.insertBefore(I,H));var b=_[_.length-1]==a[1]?_.length-1:_.length,L=_[0]==a[0]?1:0;"BR"==T&&u==b-1&&u==L?Sys.Extended.UI.HtmlEditor.isIE?(I.appendChild(s._doc.createTextNode(String.fromCharCode(160))),H.parentNode.removeChild(H)):I.appendChild(H):"BR"==T&&u==b-1&&u>L&&(!p||null!=H.nextSibling&&H.nextSibling==a[1])?H.parentNode.removeChild(H):I.appendChild(H),"BR"!=T||u!=_.length-1||p||(n(I),I=null),H==a[1]&&u==_.length-1&&(n(I),I=null)}}else{if(n(I),I=null,"remain"!=e&&("TABLE"==T||h||(H.style.textAlign=e)),h&&(H.style.margin="P"==T?"0px":""),"UL"==T||"OL"==T||"DL"==T){for(var A=0;A<H.childNodes.length;A++){var B=H.childNodes.item(A);if(1==B.nodeType){B.style.textAlign="",h&&(B.style.margin="P"==B.tagName.toUpperCase()?"0px":"");for(var P=0;P<B.childNodes.length;P++){var R=B.childNodes.item(P);if(1==R.nodeType&&R.tagName){var D=R.tagName.toUpperCase();h&&(R.style.margin="P"==D?"0px":""),("DIV"==D||"P"==D||Sys.Extended.UI.HtmlEditor.isHeader(R))&&s.tryUnWrap(R,a,h)&&(m=!0)}}}}"left"==e&&h&&(H.style.textAlign="");continue}if("LI"==T){"remain"!=e&&("left"!=e||!h||H.parentNode.style.textAlign.length>0?H.style.textAlign=e:H.style.textAlign=""),h&&(H.style.margin="P"==T?"0px":"");for(var E=H.parentNode,N=[],c=0;c<E.childNodes.length;c++)1==E.childNodes.item(c).nodeType&&N.push(E.childNodes.item(c).style.textAlign);for(var y=1;y<N.length&&N[y-1]==N[y];y++);if(y==N.length){for(var f="left"==N[0]&&h?"":N[0],u=0;u<E.childNodes.length;u++)1==E.childNodes.item(u).nodeType&&(E.childNodes.item(u).style.textAlign="",h&&(E.childNodes.item(u).style.margin="P"==E.childNodes.item(u).tagName.toUpperCase()?"0px":""));E.style.textAlign=f}continue}if("TABLE"==T&&"remain"!=e&&("left"==e&&h?(H.align="",H.removeAttribute("align")):H.align=e),("DIV"==T||"P"==T||Sys.Extended.UI.HtmlEditor.isHeader(H))&&"left"==e&&h&&s.tryUnWrap(H,a,h)&&(m=!0),("DIV"==T||"P"==T||Sys.Extended.UI.HtmlEditor.isHeader(H))&&p&&g.toUpperCase()!=T){for(var v=s._doc.createElement(g),S=H.attributes,C=0;C<S.length;++C){var x=S.item(C);x.specified&&"style"!=x.name.toLowerCase()&&v.setAttribute(x.name,x.value)}for(v.style.cssText=H.style.cssText;H.firstChild;)v.appendChild(H.firstChild);H.parentNode.insertBefore(v,H),H.parentNode.removeChild(H)}}}}}for(var i=this.get_paragraphs(),a=this.getSelectionAfterOperation(i),d=null,o=[],s=this,h=!("undefined"==typeof t||!t),p="string"==typeof l,g="string"==typeof l?l:"",m=!1,f=0;f<i.length;f++){var E=i[f];E.length>0&&(E[0].parentNode!=d&&(o.length>0&&r(),o=[],d=E[0].parentNode),o.push(E))}o.length>0&&r(),this.setSelectionAfterOperation(a,m)},Sys.Extended.UI.HtmlEditor.MSIE_indent=function(e){function t(e){if(1==e.nodeType){var t=h.rtlState()?e.style.marginRight:e.style.marginLeft;if(t.length>0)return parseInt(t)}return 0}function l(e,t){1==e.nodeType&&("P"==e.tagName.toUpperCase()&&""==t&&(t="0px"),h.rtlState()?e.style.marginRight=t:e.style.marginLeft=t)}function n(n){e?l(n,t(n)+40+"px"):"P"==n.tagName.toUpperCase()?t(n)>=40?l(n,t(n)-40+"px"):l(n,"0px"):t(n)>40?l(n,t(n)-40+"px"):l(n,"")}function r(e){null!=e&&(1!=e.childNodes||e.firstChild!=d[0]&&e.firstChild!=d[1]||(e.parentNode.insertBefore(e.firstChild,e),e.parentNode.removeChild(e)))}function i(){var i=o.firstChild,a=o.lastChild;if(o.tagName&&!Sys.Extended.UI.HtmlEditor.isInlineElement(o)&&s[0][0]==i&&s[s.length-1][s[s.length-1].length-1]==a){var g="";o.getAttribute("align")&&o.getAttribute("align").length>0&&(g=o.getAttribute("align")),o.align&&o.align.length>0&&(g=o.align),o.style.textAlign&&o.style.textAlign.length>0&&(g=o.style.textAlign),("left"==g.toLowerCase()&&!h.rtlState()||"right"==g.toLowerCase()&&h.rtlState())&&(g=""),o.align="",o.setAttribute("align",""),o.removeAttribute("align"),n(o);var m=o.tagName.toUpperCase();if("DIV"!=m&&"P"!=m&&!Sys.Extended.UI.HtmlEditor.isHeader(o)||""!=g){if(""!=g||"LI"==m&&o.parentNode.style.textAlign.length>0?o.style.textAlign=g:o.style.textAlign="","LI"==m){for(var f=o.parentNode,E=[],N=0;N<f.childNodes.length;N++)E.push(t(f.childNodes.item(N)));for(var c=1;c<E.length&&E[c-1]==E[c];c++);if(c==E.length){for(var y=0==E[0]?"":E[0]+"px",u=0;u<f.childNodes.length;u++)l(f.childNodes.item(u),"");l(f,y)}}}else h.tryUnWrap(o,d)&&(p=!0)}else for(var v=0;v<s.length;v++)for(var S=null,C=s[v],u=0;u<C.length;u++){var x=C[u],I=1==x.nodeType&&x.tagName?x.tagName.toUpperCase():null;if(null==I||"UL"!=I&&"OL"!=I&&"DL"!=I&&"DIV"!=I&&!Sys.Extended.UI.HtmlEditor.isHeader(x)&&"P"!=I&&"LI"!=I){if(e){null==S&&(S=h._doc.createElement(h.dfltBlockElement),"P"==h.dfltBlockElement.toUpperCase()&&(S.style.margin="0px"),n(S),x.parentNode.insertBefore(S,x));var U=C[C.length-1]==d[1]?C.length-1:C.length,_=C[0]==d[0]?1:0;"BR"==I&&u==U-1&&u==_?Sys.Extended.UI.HtmlEditor.isIE?(S.appendChild(h._doc.createTextNode(String.fromCharCode(160))),x.parentNode.removeChild(x)):S.appendChild(x):"BR"==I&&u==U-1&&u>_?x.parentNode.removeChild(x):S.appendChild(x),"BR"==I&&u==C.length-1&&(r(S),S=null),x==d[1]&&u==C.length-1&&(r(S),S=null)}}else{if(r(S),S=null,n(x),"UL"==I||"OL"==I||"DL"==I){for(var H=0;H<x.childNodes.length;H++){var T=x.childNodes.item(H);if(1==T.nodeType){l(T,"");for(var b=0;b<T.childNodes.length;b++){var L=T.childNodes.item(b),g=1==L.nodeType?x.style.textAlign:"";if(("left"==g.toLowerCase()&&!h.rtlState()||"right"==g.toLowerCase()&&h.rtlState())&&(g=""),1==L.nodeType&&(l(L,""),""==g&&L.tagName)){var A=L.tagName.toUpperCase();"DIV"!=A&&"P"!=A||h.tryUnWrap(L,d)&&(p=!0)}}}}continue}if("LI"==I){for(var f=x.parentNode,E=[],N=0;N<f.childNodes.length;N++)E.push(t(f.childNodes.item(N)));for(var c=1;c<E.length&&E[c-1]==E[c];c++);if(c==E.length){for(var y=0==E[0]?"":E[0]+"px",u=0;u<f.childNodes.length;u++)l(f.childNodes.item(u),"");l(f,y)}continue}var g=x.style.textAlign;("left"==g.toLowerCase()&&!h.rtlState()||"right"==g.toLowerCase()&&h.rtlState())&&(g=""),"DIV"!=I&&"P"!=I&&!Sys.Extended.UI.HtmlEditor.isHeader(x)||""!=g||h.tryUnWrap(x,d)&&(p=!0)}}}for(var a=this.get_paragraphs(),d=this.getSelectionAfterOperation(a),o=null,s=[],h=this,p=!1,g=0;g<a.length;g++){var m=a[g];m.length>0&&(m[0].parentNode!=o&&(s.length>0&&i(),s=[],o=m[0].parentNode),s.push(m))}s.length>0&&i(),this.setSelectionAfterOperation(d,p)},Sys.Extended.UI.HtmlEditor.getSelectionAfterOperation=function(e){if(0==e.length)return[];var t=this._doc.createElement("SPAN"),l=this._doc.createElement("SPAN"),n=e[0][0],r=e[e.length-1][e[e.length-1].length-1];if(n==r&&1==r.nodeType&&0==r.childNodes.length&&Sys.Extended.UI.HtmlEditor.canHaveChildren(r))r.appendChild(t),r.appendChild(l);else{var i=Sys.Extended.UI.HtmlEditor._getReallyFirst(n);if(i.parentNode.insertBefore(t,i),i==n){var a=[];a.push(t);for(var d=0;d<e[0].length;d++)a.push(e[0][d]);e[0]=a}var o=Sys.Extended.UI.HtmlEditor._getReallyLast(r);o.nextSibling?o.parentNode.insertBefore(l,o.nextSibling):o.parentNode.appendChild(l),o==r&&e[e.length-1].push(l)}return[t,l]},Sys.Extended.UI.HtmlEditor.setSelectionAfterOperation=function(e,t){if(0!=e.length){var l=e[0],n=e[1],r=this._getSelection(),i=null,a=null;if(Sys.Extended.UI.HtmlEditor.isIE){r.empty(),r=this._getSelection();var d=this._createRange(r),o=this._createRange(r);try{null!=l&&null!=n&&l.nextSibling==n&&(i=this._doc.createTextNode(" "),n.parentNode.insertBefore(i,n)),this._TcurrentFormat=null,null!=l&&d.moveToElementText(l),null!=n&&o.moveToElementText(n),null!=l&&null!=n?(d.setEndPoint("EndToStart",o),d.select(),null!=i&&(d.collapse(!1),d.select(),i.parentNode.removeChild(i))):null!=l?d.select():null!=n&&o.select()}catch(e){}}else try{var s,h=l.nextSibling,p=n.previousSibling;if(this._TcurrentFormat=null,h==p&&1==h.nodeType&&"BR"==h.tagName.toUpperCase()){var g=Sys.Extended.UI.HtmlEditor.__getIndex(h);s=this._doc.createRange(),s.setStart(h.parentNode,g),s.setEnd(h.parentNode,g)}else i=this._doc.createTextNode(""),a=this._doc.createTextNode(""),l.parentNode.insertBefore(i,l),n.parentNode.insertBefore(a,n),s=this._doc.createRange(),s.setStart(i,0),s.setEnd(a,0);this._removeAllRanges(r),this._selectRange(r,s)}catch(e){}var m=Sys.Extended.UI.HtmlEditor._commonTotalParent(null==l?n:l,null==n?l:n),f=null;if(null!=m&&(f=m.parent),null!=l&&l.parentNode.removeChild(l),null!=n&&n.parentNode.removeChild(n),t&&null!=f&&(Sys.Extended.UI.HtmlEditor.spanJoiner(f,this._doc),!Sys.Extended.UI.HtmlEditor.isIE&&null!=i&&null!=a)){var s=this._doc.createRange();s.setStart(i,0),s.setEnd(a,0),this._removeAllRanges(r),this._selectRange(r,s)}}},Sys.Extended.UI.HtmlEditor.get_paragraphs=function(){this._TcurrentFormat=null;var e=this.getPseudoP();if(0==e.length)try{var t="<span id='"+Sys.Extended.UI.HtmlEditor.smartClassName+"_ll'></span><span id='"+Sys.Extended.UI.HtmlEditor.smartClassName+"_rr'></span><br>";this.insertHTML(t);var l=this._doc.getElementById(Sys.Extended.UI.HtmlEditor.smartClassName+"_ll"),n=this._doc.getElementById(Sys.Extended.UI.HtmlEditor.smartClassName+"_rr"),r=this._TcurrentFormat;this._TcurrentFormat=null,this.setSelectionAfterOperation([l,n],!1),this._TcurrentFormat=r,e=this.getPseudoP()}catch(e){}return e},Sys.Extended.UI.HtmlEditor.getPseudoP=function(){var e=[];try{var t=this._getSelection(),l=this._createRange(t),n=Sys.Extended.UI.HtmlEditor.smartClassName+"_right",r=Sys.Extended.UI.HtmlEditor.smartClassName+"_left",i=null,a=null;Sys.Extended.UI.HtmlEditor.isIE?"control"!=t.type.toLowerCase()&&(i=l.duplicate(),a=l.duplicate(),i.setEndPoint("EndToStart",l),a.setEndPoint("StartToEnd",l)):(i=l.cloneRange(),a=l.cloneRange(),i.setEnd(i.startContainer,i.startOffset),a.setStart(a.endContainer,a.endOffset));var d=null,o=null;if(Sys.Extended.UI.HtmlEditor.isIE&&"control"==t.type.toLowerCase()){var s,h=l.item(0);s=this._doc.createElement("SPAN"),s.id=r,h.parentNode.insertBefore(s,h),s=this._doc.createElement("SPAN"),s.id=n,null==h.nextSibling?h.parentNode.appendChild(s):h.parentNode.insertBefore(s,h.nextSibling)}else{if(!this.insertHTML("<span id='"+n+"'/>",a))return[];if(!this.insertHTML("<span id='"+r+"'/>",i)){var p=this._doc.getElementById(n);return null!=p&&(N=p.parentNode,N.removeChild(p)),[]}}if(d=this._doc.getElementById(r),o=this._doc.getElementById(n),null!=d&&null!=o)for(;null==d.nextSibling;)d.parentNode.nextSibling?d.parentNode.parentNode.insertBefore(d,d.parentNode.nextSibling):d.parentNode.parentNode.appendChild(d);if(null!=d&&null!=o){for(;null==o.previousSibling;)o.parentNode.parentNode.insertBefore(o,o.parentNode);if(1==o.previousSibling.nodeType){var g=o.previousSibling.tagName.toUpperCase();if("BR"!=g&&"IMG"!=g){var m=Sys.Extended.UI.HtmlEditor._getReallyLast(o.previousSibling);1==m.nodeType&&Sys.Extended.UI.HtmlEditor.canHaveChildren(m)?m.appendChild(o):m.parentNode.appendChild(o)}}o.previousSibling&&1==o.previousSibling.nodeType&&"BR"==o.previousSibling.tagName.toUpperCase()&&o.parentNode.insertBefore(o,o.previousSibling)}if(null==d){var f=this._doc.createElement("SPAN");f.id=r,o.parentNode.insertBefore(f,o),d=f}if(null==o){var f=this._doc.createElement("SPAN");f.id=n,d.nextSibling?d.parentNode.insertBefore(f,d.nextSibling):d.parentNode.appendChild(f),o=f}for(null!=d&&null!=o&&(d.parentNode==o?o.parentNode.insertBefore(d,o):o.parentNode==d&&(null!=d.nextSibling?d.parentNode.insertBefore(o,d.nextSibling):d.parentNode.appendChild(o)));null!=d.nextSibling&&3==d.nextSibling.nodeType&&0==(""+d.nextSibling.data).length;)d.parentNode.removeChild(d.nextSibling);if(null==this._TcurrentFormat&&null!=d&&null!=o&&d.nextSibling==o){var E=o.parentNode;for(this._TcurrentFormat=null;E&&"BODY"!=E.tagName.toUpperCase()&&Sys.Extended.UI.HtmlEditor.isStyleTag(E.tagName);){if("A"!=E.tagName.toUpperCase()){var N=E.cloneNode(!1);null==this._TcurrentFormat?this._TcurrentFormat=N:(N.appendChild(this._TcurrentFormat),this._TcurrentFormat=N)}E=E.parentNode}if(this._TcurrentFormat){var c=this._doc.createElement("span");c.appendChild(this._TcurrentFormat),this._TcurrentFormat=c.innerHTML}}for(var y=d;y&&y.tagName&&Sys.Extended.UI.HtmlEditor.isStyleTag(y.tagName)&&"A"!=y.tagName.toUpperCase();)y=y.parentNode;for(null!=y&&"P"==y.tagName.toUpperCase()?null!=y.firstChild?y.insertBefore(d,y.firstChild):y.appendChild(d):Sys.Extended.UI.HtmlEditor.positionInParagraph(d,d.previousSibling,!0,d.parentNode),y=o;y&&y.tagName&&Sys.Extended.UI.HtmlEditor.isStyleTag(y.tagName)&&"A"!=y.tagName.toUpperCase();)y=y.parentNode;null!=y&&"P"==y.tagName.toUpperCase()?y.appendChild(o):Sys.Extended.UI.HtmlEditor.positionInParagraph(o,o.nextSibling,!1,o.parentNode),e=this.getPseudoP_Recur(d,o,0);var u=d.parentNode.tagName.toUpperCase();if(0!=e.length||null!=d.previousSibling||null!=o.nextSibling||d.nextSibling!=o||"P"!=u&&"DIV"!=llpTagName&&"LI"!=u||(e=[[d.parentNode]]),Sys.Extended.UI.HtmlEditor.isIE){t.empty(),t=this._getSelection();var v=this._createRange(t),S=this._createRange(t);try{null!=d&&v.moveToElementText(d),null!=o&&S.moveToElementText(o),null!=d&&null!=o?(v.setEndPoint("EndToEnd",S),v.select()):null!=d?v.select():null!=o&&S.select()}catch(e){}}null!=d&&d.parentNode.removeChild(d),null!=o&&o.parentNode.removeChild(o)}catch(e){for(var C=this._doc.getElementsByTagName("SPAN"),x=[],I=0;I<C.length;I++){var f=C[I];if(f.id&&f.id.length>0){var U=new RegExp(Sys.Extended.UI.HtmlEditor.smartClassName,"ig");U.test(f.id)&&x.push(f)}}for(var I=0;I<x.length;I++)x[I].parentNode.removeChild(x[I])}return e},Sys.Extended.UI.HtmlEditor.getPseudoP_Recur=function(e,t,l){function n(e){if(!Sys.Extended.UI.HtmlEditor.isInlineElement(e))return!0;if(e.tagName&&Sys.Extended.UI.HtmlEditor.isStyleTag(e.tagName)&&"A"!=e.tagName.toUpperCase()&&!Sys.Extended.UI.HtmlEditor.isTempElement(e))for(var t=e.firstChild;null!=t;){nnnNext=t.nextSibling;var l=n(t);if(l)return!0;t=nnnNext}return!1}var r=[],i=e,a=null!=t.nextSibling&&t.nextSibling.tagName&&"BR"==t.nextSibling.tagName.toUpperCase()?t.nextSibling:t,d=null;if(null==i||null==a?(null!=i&&(d=Sys.Extended.UI.HtmlEditor._commonTotalParent(i,i)),null!=a&&(d=Sys.Extended.UI.HtmlEditor._commonTotalParent(a,a))):d=Sys.Extended.UI.HtmlEditor._commonTotalParent(i,a),null!=d){for(i=Sys.Extended.UI.HtmlEditor.getContainer(d.parent.childNodes.item(d.indexFirst),i),a=Sys.Extended.UI.HtmlEditor.getContainer(d.parent.childNodes.item(d.indexLast),a),Sys.Extended.UI.HtmlEditor.unStyle(i),Sys.Extended.UI.HtmlEditor.unStyle(a);i.parentNode!=d.parent;)i=i.parentNode;for(;a.parentNode!=d.parent;)a=a.parentNode;Sys.Extended.UI.HtmlEditor._moveTagsUp(i.nextSibling,a),d=null,null==e||null==t?(null!=e&&(d=Sys.Extended.UI.HtmlEditor._commonTotalParent(e,e)),null!=t&&(d=Sys.Extended.UI.HtmlEditor._commonTotalParent(t,t))):d=Sys.Extended.UI.HtmlEditor._commonTotalParent(e,t),null!=d&&Sys.Extended.UI.HtmlEditor.spanJoiner(d.parent,this._doc,d.indexFirst,d.indexLast+1,!0);var o=0,s=[],h=0;if(i.tagName&&a.tagName){var p=i.tagName.toUpperCase(),g=a.tagName.toUpperCase();if("TD"!=p&&"TR"!=p||"TD"!=g&&"TR"!=g)if("DD"!=p&&"DT"!=p||"DD"!=g&&"DT"!=g){if("LI"==p&&"LI"==g){for(;"UL"!=p&&"OL"!=p;)i=i.parentNode,p=i.tagName?i.tagName.toUpperCase():null;a=i}}else{for(;i.tagName&&"DL"!=i.tagName.toUpperCase();)i=i.parentNode;a=i}else{for(;"TABLE"!=i.tagName.toUpperCase();)i=i.parentNode;a=i}}for(var m=e?e:t,f=t?t:e,E=i;;){if(!Sys.Extended.UI.HtmlEditor.isTempElement(E)){var N=n(E);if(N)if(E.tagName&&"BR"==E.tagName.toUpperCase())s[h]=E,r[o]=s,o++,s=[],h=0;else if(E!=a&&E!=i||(E==a&&E==i?Sys.Extended.UI.HtmlEditor._reallyFirst(E,m)&&Sys.Extended.UI.HtmlEditor._reallyLast(E,f):Sys.Extended.UI.HtmlEditor._reallyFirst(E,m)||Sys.Extended.UI.HtmlEditor._reallyLast(E,f)))h>0&&(r[o]=s,o++,s=[],h=0),s[h]=E,r[o]=s,o++,s=[],h=0;else{var c=E.tagName?E.tagName.toUpperCase():null;if("TABLE"==c||"TBODY"==c){for(var y=E;"TABLE"!=y.tagName.toUpperCase();)y=y.parentNode;for(var u=0,v=0,S=y.rows.item(y.rows.length-1).cells.length-1,C=y.rows.length-1,x=0;x<y.rows.length;x++)for(var I=y.rows.item(x),U=0;U<I.cells.length;U++){var _=I.cells.item(U);Sys.Extended.UI.HtmlEditor._lookChild(_,m)>=0&&(u=U,v=x),Sys.Extended.UI.HtmlEditor._lookChild(_,f)>=0&&(S=U,C=x)}for(var x=v;x<=C;x++)for(var U=x==v?u:0;U<=(x==C?S:y.rows.item(x).cells.length-1);U++){var _=y.rows.item(x).cells.item(U);h>0&&(r[o]=s,o++,s=[],h=0);var H=Sys.Extended.UI.HtmlEditor._lookChild(_,m)>=0,T=Sys.Extended.UI.HtmlEditor._lookChild(_,f)>=0;if(H||T){var b=m,L=f,A=Sys.Extended.UI.HtmlEditor.smartClassName+"_right_"+l,B=Sys.Extended.UI.HtmlEditor.smartClassName+"_left_"+l;H&&(L=this._doc.createElement("span"),L.id=A,_.appendChild(L)),T&&(b=this._doc.createElement("span"),b.id=B,_.firstChild?_.insertBefore(b,_.firstChild):_.appendChild(b));for(var P=this.getPseudoP_Recur(b,L,l+1),R=0;R<P.length;R++)r[o]=P[R],o++;b!=m&&b.parentNode.removeChild(b),L!=f&&L.parentNode.removeChild(L)}else{for(var D=0,F=_.childNodes.length,k=D;k<F;k++){var w=_.childNodes.item(k);Sys.Extended.UI.HtmlEditor.isTempElement(w)||(s[h]=w,h++)}s.length>0&&(r[o]=s,o++,s=[],h=0)}}}else if("UL"==c||"OL"==c||"DL"==c){for(var O=E,z=0,V=O.childNodes.length-1,x=0;x<O.childNodes.length;x++){var W=O.childNodes.item(x);1==W.nodeType&&((W==m||Sys.Extended.UI.HtmlEditor._lookChild(W,m)>=0)&&(z=x),(W==f||Sys.Extended.UI.HtmlEditor._lookChild(W,f)>=0)&&(V=x))}for(var x=z;x<=V;x++){var W=O.childNodes.item(x);h>0&&(r[o]=s,o++,s=[],h=0);var H=Sys.Extended.UI.HtmlEditor._lookChild(W,m)>=0,T=Sys.Extended.UI.HtmlEditor._lookChild(W,f)>=0;if(H||T){var b=m,L=f,A=Sys.Extended.UI.HtmlEditor.smartClassName+"_right_"+l,B=Sys.Extended.UI.HtmlEditor.smartClassName+"_left_"+l;H&&(L=this._doc.createElement("span"),L.id=A,W.appendChild(L)),T&&(b=this._doc.createElement("span"),b.id=B,W.firstChild?W.insertBefore(b,W.firstChild):W.appendChild(b));for(var P=this.getPseudoP_Recur(b,L,l+1),R=0;R<P.length;R++)r[o]=P[R],o++;b!=m&&b.parentNode.removeChild(b),L!=f&&L.parentNode.removeChild(L)}else{for(var D=0,F=W.childNodes.length,k=D;k<F;k++){var w=W.childNodes.item(k);Sys.Extended.UI.HtmlEditor.isTempElement(w)||(s[h]=w,h++)}s.length>0&&(r[o]=s,o++,s=[],h=0)}}}else{var H=Sys.Extended.UI.HtmlEditor._lookChild(E,m)>=0,T=Sys.Extended.UI.HtmlEditor._lookChild(E,f)>=0;if(h>0&&(r[o]=s,o++,s=[],h=0),H||T){var b=m,L=f,A=Sys.Extended.UI.HtmlEditor.smartClassName+"_right_"+l,B=Sys.Extended.UI.HtmlEditor.smartClassName+"_left_"+l;H&&(L=this._doc.createElement("span"),L.id=A,E.appendChild(L)),T&&(b=this._doc.createElement("span"),b.id=B,E.firstChild?E.insertBefore(b,E.firstChild):E.appendChild(b));for(var P=this.getPseudoP_Recur(b,L,l+1),R=0;R<P.length;R++)r[o]=P[R],o++;b!=m&&b.parentNode.removeChild(b),L!=f&&L.parentNode.removeChild(L)}else{for(var D=0,F=E.childNodes.length,k=D;k<F;k++){var w=E.childNodes.item(k);Sys.Extended.UI.HtmlEditor.isTempElement(w)||(s[h]=w,h++)}s.length>0&&(r[o]=s,o++,s=[],h=0)}}}else{if(E.nodeType&&3==E.nodeType){var M=""+E.data;if(0==M.length||/^[\n\r]+$/.test(M)){var Y=E.nextSibling;if(E.parentNode.removeChild(E),E==a)break;E=Y;continue}}s[h]=E,h++}}if(E==a)break;E=E.nextSibling}h>0&&(r[o]=s)}return r},Sys.Extended.UI.HtmlEditor.unWrap=function(e,t){var l=this;if(e.firstChild){for(;e.firstChild&&3==e.firstChild.nodeType&&""+e.firstChild.data=="";)e.removeChild(e.firstChild);for(var n=[];e.firstChild;)e.firstChild!=t[0]&&e.firstChild!=t[1]&&n.push(e.firstChild),e.parentNode.insertBefore(e.firstChild,e);if(0==n.length){var r=l._doc.createElement("BR");e.parentNode.insertBefore(r,e)}if(Sys.Extended.UI.HtmlEditor.isIE&&1==n.length&&3==n[0].nodeType){var i=""+n[0].data;if(1==i.length&&160==i.charCodeAt(0)){var r=l._doc.createElement("BR");n[0].parentNode.insertBefore(r,n[0]),n[0].parentNode.removeChild(n[0])}}for(;e.nextSibling&&3==e.nextSibling.nodeType&&""+e.nextSibling.data=="";)e.parentNode.removeChild(e.nextSibling);var a=e.previousSibling&&t[1]==e.previousSibling?t[1].previousSibling:e.previousSibling;if(a&&Sys.Extended.UI.HtmlEditor.isInlineElement(a)&&1==a.nodeType&&a.childNodes.length>0&&(a=Sys.Extended.UI.HtmlEditor._getReallyLast(a)),Sys.Extended.UI.HtmlEditor.isInlineElement(a)&&null!=e.nextSibling){var r=l._doc.createElement("BR");e.parentNode.insertBefore(r,e)}}else{var r=l._doc.createElement("BR");e.parentNode.insertBefore(r,e)}e.parentNode.removeChild(e)},Sys.Extended.UI.HtmlEditor.tryUnWrap=function(e,t,l){var n=this;e.style.textAlign="";for(var r=0,i=e.attributes,a=0;a<i.length;++a){var d=i.item(a);d.specified&&"style"!=d.name.toLowerCase()&&r++}var o,s=e.style.cssText,h=0,p=e.tagName.toUpperCase();if(("undefined"==typeof l||!l)&&"LI"!=p)try{o=parseInt(Sys.Extended.UI.HtmlEditor.getStyle(e,"margin-top")),isNaN(o)&&(o="P"==p?1:0),h+=o,o=parseInt(Sys.Extended.UI.HtmlEditor.getStyle(e,"margin-bottom")),isNaN(o)&&(o="P"==p?1:0),h+=o,o=parseInt(Sys.Extended.UI.HtmlEditor.getStyle(e,"margin-right")),isNaN(o)&&(o="P"==p?1:0),h+=o,o=parseInt(Sys.Extended.UI.HtmlEditor.getStyle(e,"margin-left")),isNaN(o)&&(o="P"==p?1:0),h+=o}catch(e){h=1}return e.style.margin="",0==r&&0==e.style.cssText.length&&0==h||"undefined"!=typeof l&&l&&"LI"!=p?(n.unWrap(e,t),!0):(e.style.cssText=s,!1)},Sys.Extended.UI.HtmlEditor._queryCommandValue=function(e,t){var l=this._rangeStartEnd();if(null==l)return"";try{if("backcolor"==e.toLowerCase()){for(var n=l.start;n;){var r=Sys.Extended.UI.HtmlEditor.getStyle(n,"background-color").toLowerCase();if(r.length>0&&"transparent"!=r)return r;n=n.parentNode}return"#FFFFFF"}var i="none";switch(e.toLowerCase()){case"forecolor":i="color";break;case"fontname":i="font-family";break;case"fontsize":i="font-size"}var a;if("font-size"!=i&&"font-family"!=i||!this._FontNotSet){if(a=Sys.Extended.UI.HtmlEditor.getStyle(l.start,i).toLowerCase(),"font-size"==i&&!Sys.Extended.UI.HtmlEditor.isIE){a=Sys.Extended.UI.HtmlEditor._TryTransformFromPxToPt(a,this,t);for(var d=l.start;null!=d;){if(d.style&&d.style.fontSize&&d.style.fontSize.length>0){a=d.style.fontSize;break}if(d.className&&d.className.length>0)break;var o=d.tagName.toUpperCase();if("BODY"==o||"TD"==o)break;d=d.parentNode}}}else{a="";for(var d=l.start;null!=d;){if("font-size"==i){if(d.style&&d.style.fontSize&&d.style.fontSize.length>0){a=d.style.fontSize;break}if(d.tagName&&"FONT"==d.tagName.toUpperCase()&&d.size&&d.size.length>0){a=Sys.Extended.UI.HtmlEditor.fontSizeSeek(d.size);break}}else{if(d.style&&d.style.fontFamily&&d.style.fontFamily.length>0){a=d.style.fontFamily;break}if(d.tagName&&"FONT"==d.tagName.toUpperCase()&&d.face&&d.face.length>0){a=d.face;break}}if(d.className&&d.className.length>0){a=Sys.Extended.UI.HtmlEditor.getStyle(d,i).toLowerCase(),"font-size"==i&&(Sys.Extended.UI.HtmlEditor.isIE||(a=Sys.Extended.UI.HtmlEditor._TryTransformFromPxToPt(a,this,t)));break}var o=d.tagName.toUpperCase();if("BODY"==o||"TD"==o)break;d=d.parentNode}}if(null!=this._StyleForTyping&&this._StyleForTyping.length>0)for(var s=0;s<this._StyleForTyping.length;s++){var h=this._StyleForTyping[s];if(h.name==i){a=h.value;break}}return a}catch(e){return""}};