/**
* Initialize standard build of the TinyMCE
*
* @param options
*/
function initTinyMCE(options) {
    
    window._old$ = window._old$ ||$;
    
    if (typeof tinyMCE == 'undefined') return false;
    // Load when DOM is ready
    domready(function () {
        var textareas = getElementsByClassName(options.textarea_class, 'textarea'), buttonData, buttonFunction;
        // Get custom buttons data
        if (typeof options.tinymce_buttons == 'object') {
            for (var buttonId in options.tinymce_buttons) {
                buttonData = options.tinymce_buttons[buttonId];
                if (typeof window['tinymce_button_' + buttonId] == 'function') {
                    buttonFunction = window['tinymce_button_' + buttonId];
                }
            }
        }

        tinyMCE.settings = options.theme['simple'];

        for (var i in textareas) {
            // Skip if can't get element
            if (typeof textareas[i] == 'undefined') continue;

            var textarea = textareas[i];
            // Get editor's theme from the textarea data
            var theme = textarea.getAttribute("data-theme") || 'simple';

            // Get selected theme options
            tinyMCE.settings = (typeof options.theme[theme] != 'undefined')
                ? options.theme[theme]
                : options.theme['simple']

            // workaround for an incompatibility with html5-validation (see: http://git.io/CMKJTw)
            if (textarea.getAttribute("required")) {
                tinyMCE.settings.onchange_callback = function (ed) {
                    ed.save();

                }
            }

            // Add custom buttons to current editor
            if (buttonData && buttonFunction) {
                tinyMCE.settings.setup = function (editor) {
                    var thisButtonData = clone(buttonData);
                    thisButtonData.onclick = function () {
                        buttonFunction(editor);
                    }
                    editor.addButton(buttonId, thisButtonData);
                }
            }

            var selectedNode = null;

            tinyMCE.settings.setup = function (editor) {

                editor.onKeyUp.add(function(ed, e) {
                    updateSwitchMenuDisplay(ed);

                    // When the enter key is pressed twice in the same block 'PRE', we leave the block
                    if (e.keyCode == 13)
                    {
                        var node = ed.selection.getNode();

                        if(node.nodeName == 'PRE')
                        {
                            if(selectedNode == null || selectedNode != node)
                            {
                                selectedNode = node;
                            }
                            else if(selectedNode == node)
                            {
                                var p = ed.getDoc().createElement("p");
                                ed.execCommand('mceInsertContent', false, p.outerHTML);
                                selectedNode = null;
                            }
                        }
                    }

                });

                editor.onClick.add(function(ed, evt) {
                    ed.focus();
                    currentFocus = ed;
                    textareaContent = _old$(ed.getContainer().parentNode.getElementsByTagName('textarea'));
                    wysiwygContent = _old$(ed.getContainer().parentNode.getElementsByClassName('.wysiwygContent'));
                });

                editor.onSetContent.add(function(ed, o) {
                   updateSwitchMenuDisplay(ed);
                });

                editor.onExecCommand.add(function(ed, cmd, ui, val) {
                    if(cmd == 'mceInsertContent')
                    {
                        updateSwitchMenuDisplay(ed);
                    }
                });
            }

            var inputs = textarea.parentNode.getElementsByTagName('input');
            if(inputs[0].value == 'editor')
            {
                addWysiwyg(textarea.id, textarea.className.indexOf('error') != -1);
                textarea.removeAttribute('required');
            }
            else
            {

                // Switch to markdown
                var items = textarea.parentNode.getElementsByTagName('li');

                for (i = 0; i < items.length; i++) {
                    if(items[i].className.indexOf('switchEditeur') != -1) {
                        items[i].className = 'switchEditeur inactive';
                    }
                    else if(items[i].className.indexOf('switchMarkdown') != -1)
                    {
                        items[i].className = 'switchMarkdown';
                    }
                }

                // Show overview button
                var formInputs = textarea.parentNode.parentNode.getElementsByTagName('input');
                for (i = 0; i < formInputs.length; i++) {
                    if(formInputs[i].className.indexOf('showMarkdownOverview') != -1 ) {
                        formInputs[i].style.display = 'block';
                    }
                }

                // Show markdown info
                var pNode = textarea.parentNode.getElementsByTagName('p');
                for (var i in pNode) {
                    if(pNode[i].className == 'information infoMarkdown')
                        pNode[i].style.display = 'block';
                }

                // Show Markdown upload Button
                var divNode = textarea.parentNode.getElementsByTagName('div');
                for (var i in pNode) {
                    if(divNode[i].className == 'uploadMarkdownSource')
                        divNode[i].style.display = 'block';
                }
            }
        }

        // Show HTML edition
        _old$(document).on('click', '.viewHtml',function(){
            divContent = _old$(this).closest('.wysiwygContent');
            if(divContent.find('.mceEditor').length > 0)
            {
                tinyMCE.execCommand('mceFocus', false, divContent.find('textarea').attr('id'));
                tinyMCE.activeEditor.execCommand('mceCodeEditor');
            }
        });

    });
}

function addWysiwyg(id, hasError)
{
    tinyMCE.execCommand('mceAddControl', true, id);

    // Adds error class
    if(hasError)
    {
        setTimeout(function(){
            document.getElementById(id + '_parent').className += ' error';
        }, 1000);
    }

    if(tinyMCE.activeEditor != null) {
        setTimeout(function(){
            try {

                tinyMCE.activeEditor.setContent(document.getElementById(id).value);
            } catch(e) {}

            tinyMCE.activeEditor.focus();
            currentFocus = tinyMCE.activeEditor;
        }, 200);
    }
}

function updateSwitchMenuDisplay(ed)
{
    var switchMenu = ed.getContainer().parentNode.getElementsByTagName('ul');
    for (var i = 0; i < switchMenu.length; i++)
    {
        if(switchMenu[i].className.indexOf('writingTypeSwitch') != -1)
        {
            if(switchMenu[i].style.display != 'none' && ed.getContent() != '')
            {
                switchMenu[i].style.display = 'none';
            }

            if(switchMenu[i].style.display == 'none' && ed.getContent() == '')
            {
                switchMenu[i].style.display = 'block';
            }
        }
    }
}


/**
* Get elements by class name
*
* @param classname
* @param node
*/
function getElementsByClassName(classname, node) {
    var elements = document.getElementsByTagName(node),
        array = [],
        re = new RegExp('\\b' + classname + '\\b');
    for (var i = 0, j = elements.length; i < j; i++) {
        if (re.test(elements[i].className)) array.push(elements[i]);
    }
    return array;
}

/**
* Clone object
*
* @param o
*/
function clone(o) {
    if (!o || "object" !== typeof o) {
        return o;
    }
    var c = "function" === typeof o.pop ? [] : {};
    var p, v;
    for (p in o) {
        if (o.hasOwnProperty(p)) {
            v = o[p];
            if (v && "object" === typeof v) {
                c[p] = clone(v);
            }
            else c[p] = v;
        }
    }
    return c;
}
