<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laravel Newsletter Editor by Khan</title>
    <meta content="Best Free Open Source Responsive No-Code Newsletter HTML Email Builder" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('grapejs/stylesheets/grapes.min.css?v0.21.8') }}">
    <link rel="stylesheet" href="{{ asset('grapejs/stylesheets/material.css') }}">
    <link rel="stylesheet" href="{{ asset('grapejs/stylesheets/tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('grapejs/stylesheets/demos.css?v2') }}">

    <script src="{{ asset('grapejs/js/grapes.min.js?v0.21.8') }}"></script>
    <!-- <script src="./js/ckeditor/ckeditor.js"></script> -->
    <!-- <script src="https://unpkg.com/grapesjs-plugin-ckeditor@0.0.10"></script> -->
    <script src="{{ asset('grapejs/js/grapesjs-plugin-ckeditor/index.js') }}"></script>
    <script src="https://unpkg.com/grapesjs-preset-newsletter@1.0.1"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<style>
    .nl-link {
        color: inherit;
    }

    .gjs-logo-version {
        background-color: #5a606d;
    }

    .cke_toolbar.cke_toolbar {
        min-height: 33px;
    }
</style>

<body>


    <div id="gjs" style="height:0px; overflow:hidden">


        {{-- <table class="main-body">
            <tr class="row">
                <td class="main-body-cell">
                    <table class="container">
                        <tr>
                            <td class="container-cell">
                                <table class="table100 c1790">
                                    <tr>
                                        <td class="top-cell" id="c1793">
                                            <u class="browser-link" id="c307">View in browser
                                            </u>
                                        </td>
                                    </tr>
                                </table>
                                <table class="c1766">
                                    <tr>
                                        <td class="cell c1769">
                                            <img class="c926" src="https://grapesjs.com/img/grapesjs-logo.png"
                                                alt="GrapesJS." />
                                        </td>
                                        <td class="cell c1776">
                                            <div class="c1144">GrapesJS Newsletter Builder
                                                <br />
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table class="card">
                                    <tr>
                                        <td class="card-cell">
                                            <img class="c1271" src="https://grapesjs.com/img/tmp-header-txt.jpg"
                                                alt="Big image here" />
                                            <table class="table100 c1357">
                                                <tr>
                                                    <td class="card-content">
                                                        <h1 class="card-title">Build your newsletters faster than ever
                                                            <br />
                                                        </h1>
                                                        <p class="card-text">Import, build, test and export responsive
                                                            newsletter templates faster than ever using the GrapesJS
                                                            Newsletter Builder.
                                                        </p>
                                                        <table class="c1542">
                                                            <tr>
                                                                <td class="card-footer" id="c1545">
                                                                    <a class="button"
                                                                        href="https://github.com/grapesjs/grapesjs">Free
                                                                        and Open Source
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table class="list-item">
                                    <tr>
                                        <td class="list-item-cell">
                                            <table class="list-item-content">
                                                <tr class="list-item-row">
                                                    <td class="list-cell-left">
                                                        <img class="list-item-image"
                                                            src="https://grapesjs.com/img/tmp-blocks.jpg"
                                                            alt="Image1" />
                                                    </td>
                                                    <td class="list-cell-right">
                                                        <h1 class="card-title">Built-in Blocks
                                                        </h1>
                                                        <p class="card-text">Drag and drop built-in blocks from the
                                                            right panel and style them in a matter of seconds
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table class="list-item">
                                    <tr>
                                        <td class="list-item-cell">
                                            <table class="list-item-content">
                                                <tr class="list-item-row">
                                                    <td class="list-cell-left">
                                                        <img class="list-item-image"
                                                            src="https://grapesjs.com/img/tmp-tgl-images.jpg"
                                                            alt="Image2" />
                                                    </td>
                                                    <td class="list-cell-right">
                                                        <h1 class="card-title">Toggle images
                                                        </h1>
                                                        <p class="card-text">Build a good looking newsletter even
                                                            without images enabled by the email clients
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table class="grid-item-row">
                                    <tr>
                                        <td class="grid-item-cell2-l">
                                            <table class="grid-item-card">
                                                <tr>
                                                    <td class="grid-item-card-cell">
                                                        <img class="grid-item-image"
                                                            src="https://grapesjs.com/img/tmp-send-test.jpg"
                                                            alt="Image1" />
                                                        <table class="grid-item-card-body">
                                                            <tr>
                                                                <td class="grid-item-card-content">
                                                                    <h1 class="card-title">Test it
                                                                    </h1>
                                                                    <p class="card-text">You can send email tests
                                                                        directly from the editor and check how are
                                                                        looking on your email clients
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="grid-item-cell2-r">
                                            <table class="grid-item-card">
                                                <tr>
                                                    <td class="grid-item-card-cell">
                                                        <img class="grid-item-image"
                                                            src="https://grapesjs.com/img/tmp-devices.jpg"
                                                            alt="Image2" />
                                                        <table class="grid-item-card-body">
                                                            <tr>
                                                                <td class="grid-item-card-content">
                                                                    <h1 class="card-title">Responsive
                                                                    </h1>
                                                                    <p class="card-text">Using the device manager you'll
                                                                        always send a fully responsive contents
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table class="footer">
                                    <tr>
                                        <td class="footer-cell">
                                            <div class="c2577">
                                                <p class="footer-info">GrapesJS Newsletter Builder is a free and open
                                                    source preset (plugin) used on top of the GrapesJS core library.
                                                    For more information about and how to integrate it inside your
                                                    applications check
                                                <p>
                                                    <a class="link"
                                                        href="https://github.com/grapesjs/preset-newsletter">GrapesJS
                                                        Newsletter Preset</a>
                                                    <br />
                                            </div>
                                            <div class="c2421">
                                                MADE BY <a class="link" href="https://github.com/artf">ARTUR
                                                    ARSENIEV</a>
                                                <p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <style>
            .link {
                color: rgb(217, 131, 166);
            }

            .row {
                vertical-align: top;
            }

            .main-body {
                min-height: 150px;
                padding: 5px;
                width: 100%;
                height: 100%;
                background-color: rgb(234, 236, 237);
            }

            .c926 {
                color: rgb(158, 83, 129);
                width: 100%;
                font-size: 50px;
            }

            .cell.c849 {
                width: 11%;
            }

            .c1144 {
                padding: 10px;
                font-size: 17px;
                font-weight: 300;
            }

            .card {
                min-height: 150px;
                padding: 5px;
                margin-bottom: 20px;
                height: 0px;
            }

            .card-cell {
                background-color: rgb(255, 255, 255);
                overflow: hidden;
                border-radius: 3px;
                padding: 0;
                text-align: center;
            }

            .card.sector {
                background-color: rgb(255, 255, 255);
                border-radius: 3px;
                border-collapse: separate;
            }

            .c1271 {
                width: 100%;
                margin: 0 0 15px 0;
                font-size: 50px;
                color: rgb(120, 197, 214);
                line-height: 250px;
                text-align: center;
            }

            .table100 {
                width: 100%;
            }

            .c1357 {
                min-height: 150px;
                padding: 5px;
                margin: auto;
                height: 0px;
            }

            .darkerfont {
                color: rgb(65, 69, 72);
            }

            .button {
                font-size: 12px;
                padding: 10px 20px;
                background-color: rgb(217, 131, 166);
                color: rgb(255, 255, 255);
                text-align: center;
                border-radius: 3px;
                font-weight: 300;
            }

            .table100.c1437 {
                text-align: left;
            }

            .cell.cell-bottom {
                text-align: center;
                height: 51px;
            }

            .card-title {
                font-size: 25px;
                font-weight: 300;
                color: rgb(68, 68, 68);
            }

            .card-content {
                font-size: 13px;
                line-height: 20px;
                color: rgb(111, 119, 125);
                padding: 10px 20px 0 20px;
                vertical-align: top;
            }

            .container {
                font-family: Helvetica, serif;
                min-height: 150px;
                padding: 5px;
                margin: auto;
                height: 0px;
                width: 90%;
                max-width: 550px;
            }

            .cell.c856 {
                vertical-align: middle;
            }

            .container-cell {
                vertical-align: top;
                font-size: medium;
                padding-bottom: 50px;
            }

            .c1790 {
                min-height: 150px;
                padding: 5px;
                margin: auto;
                height: 0px;
            }

            .table100.c1790 {
                min-height: 30px;
                border-collapse: separate;
                margin: 0 0 10px 0;
            }

            .browser-link {
                font-size: 12px;
            }

            .top-cell {
                text-align: right;
                color: rgb(152, 156, 165);
            }

            .table100.c1357 {
                margin: 0;
                border-collapse: collapse;
            }

            .c1769 {
                width: 30%;
            }

            .c1776 {
                width: 70%;
            }

            .c1766 {
                margin: 0 auto 10px 0;
                padding: 5px;
                width: 100%;
                min-height: 30px;
            }

            .cell.c1769 {
                width: 11%;
            }

            .cell.c1776 {
                vertical-align: middle;
            }

            .c1542 {
                margin: 0 auto 10px auto;
                padding: 5px;
                width: 100%;
            }

            .card-footer {
                padding: 20px 0;
                text-align: center;
            }

            .c2280 {
                height: 150px;
                margin: 0 auto 10px auto;
                padding: 5px 5px 5px 5px;
                width: 100%;
            }

            .c2421 {
                padding: 10px;
            }

            .c2577 {
                padding: 10px;
            }

            .footer {
                margin-top: 50px;
                color: rgb(152, 156, 165);
                text-align: center;
                font-size: 11px;
                padding: 5px;
            }

            .quote {
                font-style: italic;
            }

            .list-item {
                height: auto;
                width: 100%;
                margin: 0 auto 10px auto;
                padding: 5px;
            }

            .list-item-cell {
                background-color: rgb(255, 255, 255);
                border-radius: 3px;
                overflow: hidden;
                padding: 0;
            }

            .list-cell-left {
                width: 30%;
                padding: 0;
            }

            .list-cell-right {
                width: 70%;
                color: rgb(111, 119, 125);
                font-size: 13px;
                line-height: 20px;
                padding: 10px 20px 0px 20px;
            }

            .list-item-content {
                border-collapse: collapse;
                margin: 0 auto;
                padding: 5px;
                height: 150px;
                width: 100%;
            }

            .list-item-image {
                color: rgb(217, 131, 166);
                font-size: 45px;
                width: 100%;
            }

            .grid-item-image {
                line-height: 150px;
                font-size: 50px;
                color: rgb(120, 197, 214);
                margin-bottom: 15px;
                width: 100%;
            }

            .grid-item-row {
                margin: 0 auto 10px;
                padding: 5px 0;
                width: 100%;
            }

            .grid-item-card {
                width: 100%;
                padding: 5px 0;
                margin-bottom: 10px;
            }

            .grid-item-card-cell {
                background-color: rgb(255, 255, 255);
                overflow: hidden;
                border-radius: 3px;
                text-align: center;
                padding: 0;
            }

            .grid-item-card-content {
                font-size: 13px;
                color: rgb(111, 119, 125);
                padding: 0 10px 20px 10px;
                width: 100%;
                line-height: 20px;
            }

            .grid-item-cell2-l {
                vertical-align: top;
                padding-right: 10px;
                width: 50%;
            }

            .grid-item-cell2-r {
                vertical-align: top;
                padding-left: 10px;
                width: 50%;
            }
        </style> --}}


    </div>
    <input type="hidden" id="product_id" value="{{ $template_id }}">




    {{-- <form id="test-form" class="test-form" action="" method="POST" style="display:none">
        <div class="gjs-sm-property">
            <div class="gjs-field">
                <span id="gjs-sm-input-holder">
                    <input type="email" name="email" placeholder="Email" required>
                </span>
            </div>
        </div>

        <div class="gjs-sm-property">
            <div class="gjs-field">
                <span id="gjs-sm-input-holder">
                    <input type="text" name="subject" placeholder="Subject" required>
                </span>
            </div>
        </div>
        <input type="hidden" name="body">
        <button class="gjs-btn-prim gjs-btn-import" style="width: 100%">SEND</button>
    </form> --}}


    <div id="info-panel" style="display:none">
        <br />
        {{-- <svg class="info-panel-logo" xmlns="//www.w3.org/2000/svg" version="1">
            <g id="gjs-logo">
                <path
                    d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2"
                    style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:10;stroke:#fff" />
            </g>
        </svg>
        <br />
        <div class="info-panel-label">
            <b>GrapesJS Newsletter Builder</b> is a showcase of what/how is possible to build an editor using the
            <a class="info-panel-link gjs-four-color" target="_blank" href="https://grapesjs.com/">GrapesJS</a>
            core library
            <br /><br />
            For any tip about this demo (or newsletters construction in general) check the
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://github.com/grapesjs/preset-newsletter">Newsletter Preset repository</a>
            and open an issue. For any problem with the builder itself, open an issue on the main
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://github.com/grapesjs/grapesjs">GrapesJS repository</a>
            <br /><br />
            Being a free and open source project contributors and supporters are extremely welcome.
            If you like the project support it with a donation of your choice or become a backer/sponsor via
            <a class="info-panel-link gjs-four-color" target="_blank" href="https://opencollective.com/grapesjs">Open
                Collective</a>
        </div> --}}
        <form id="test-form" class="test-form" action="" method="POST" style="display:block">
            @csrf
            <div class="gjs-sm-property">
                <div class="gjs-field">
                    <span id="gjs-sm-input-holder">
                        <input type="email" id="testemail" name="email" placeholder="Email" required>
                    </span>
                </div>
            </div>

            <div class="gjs-sm-property">
                <div class="gjs-field">
                    <span id="gjs-sm-input-holder">
                        <input type="text" id="testsubject" name="subject" placeholder="Subject" required>
                    </span>
                </div>
            </div>
            <input type="hidden" id="template_id" name="template_id" value="{{ $template_id }}">
            <input type="hidden" name="body">
            <button class="gjs-btn-prim gjs-btn-import" style="width: 100%">SEND</button>
        </form>
    </div>

    <div style="display: none">
        <div class="gjs-logo-cont">
            <a href="//grapesjs.com"><img class="gjs-logo" src="{{ asset('grapejs/img/grapesjs-logo-cl.png') }}"></a>
            <div class="gjs-logo-version"></div>
        </div>
    </div>


    {{-- <div class="ad-cont">
        <div id="native-carbon"></div>
        <script async type="text/javascript" src="{{ asset('grapejs/js/carbon-v2.js') }}"></script>
    </div> --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/grapesjs-parser-postcss@1.0.3/dist/index.js"></script>
    <script type="text/javascript">
        var host = 'http://localhost/pagebuilderapp/public/';
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var uploadRoute = 'http://localhost/pagebuilderapp/public/';

        // Set up GrapesJS editor with the Newsletter plugin
        var editor = grapesjs.init({
            selectorManager: {
                componentFirst: true
            },
            clearOnRender: true,
            height: '100%',
            storageManager: {
                options: {
                    local: {
                        key: 'gjsProjectNl'
                    }
                }
            },
            container: '#gjs',
            fromElement: true,
            plugins: ['grapesjs-preset-newsletter', 'grapesjs-plugin-ckeditor', 'grapesjs-parser-postcss'],
            pluginsOpts: {
                'grapesjs-preset-newsletter': {
                    modalLabelImport: 'Paste all your code here below and click import',
                    modalLabelExport: 'Copy the code and use it wherever you want',
                    codeViewerTheme: 'material',
                    importPlaceholder: '<table class="table"><tr><td class="cell">Hello world!</td></tr></table>',
                    cellStyle: {
                        'font-size': '12px',
                        'font-weight': 300,
                        'vertical-align': 'top',
                        color: 'rgb(111, 119, 125)',
                        margin: 0,
                        padding: 0,
                    }
                },
                'grapesjs-plugin-ckeditor': {
                    onToolbar: el => {
                        el.style.minWidth = '350px';
                    },
                    options: {
                        startupFocus: true,
                        extraAllowedContent: '*(*);*{*}', // Allows any class and any inline style
                        allowedContent: true, // Disable auto-formatting, class removing, etc.
                        enterMode: 2, // CKEDITOR.ENTER_BR,
                        extraPlugins: 'sharedspace,justify,colorbutton,panelbutton,font',
                        toolbar: [{
                                name: 'styles',
                                items: ['Font', 'FontSize']
                            },
                            ['Bold', 'Italic', 'Underline', 'Strike'],
                            {
                                name: 'paragraph',
                                items: ['NumberedList', 'BulletedList']
                            },
                            {
                                name: 'links',
                                items: ['Link', 'Unlink']
                            },
                            {
                                name: 'colors',
                                items: ['TextColor', 'BGColor']
                            },
                        ],
                    }
                }
            },
            assetManager: {
                assets: [
                    host + 'upload/1705777274.png'
                    // host + 'img/grapesjs-logo.png',
                    // host + 'img/tmp-blocks.jpg',
                    // host + 'img/tmp-tgl-images.jpg',
                    // host + 'img/tmp-send-test.jpg',
                    // host + 'img/tmp-devices.jpg',
                ],
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                uploadFile: (ev) => {
                    const files = ev.dataTransfer ? ev.dataTransfer.files : ev.target.files;
                    // Retrieve additional parameters or data
                    var additionalData = {
                        // Your additional parameters here
                        category: 'image',
                        user_id: 123,
                    };

                    // Create FormData and append file and additional data
                    var formData = new FormData();
                    formData.append('asset', files[0]);
                    formData.append('_token', csrfToken);
                    Object.keys(additionalData).forEach(function(key) {
                        formData.append(key, additionalData[key]);
                    });

                    // Perform the AJAX upload
                    fetch('{{ route('uploadasset') }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: formData,
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data.file);

                            const am = editor.AssetManager;
                            am.add([{
                                // You can pass any custom property you want
                                category: 'c1',
                                src: data.file,
                            }]);
                            am.render();
                            // if (data.success) {
                            //     // Call the done callback with the uploaded asset details
                            //     done({
                            //         src: data.file,
                            //         name: data.name,
                            //         // Additional properties if needed
                            //     });
                            // } else {
                            //     // Handle upload failure
                            //     console.log('Upload failed');
                            // }
                        })
                        .catch(error => {
                            // Handle upload failure
                            console.log('Opps.Upload failed.');
                            displayErrorMessage('Opps.Upload failed.');
                        });
                },

            },
        });


        // Let's add in this demo the possibility to test our newsletters
        var pnm = editor.Panels;
        var cmdm = editor.Commands;
        var md = editor.Modal;

        // Add info command
        var infoContainer = document.getElementById("info-panel");
        cmdm.add('open-info', {
            run: function(editor, sender) {
                var mdlClass = 'gjs-mdl-dialog-sm';
                sender.set('active', 0);
                var mdlDialog = document.querySelector('.gjs-mdl-dialog');
                mdlDialog.className += ' ' + mdlClass;
                infoContainer.style.display = 'block';
                md.open({
                    title: 'Send Test Email',
                    content: infoContainer,
                });
                md.getModel().once('change:open', function() {
                    mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
                })
            }
        });

        // Add info button
        const iconStyle = 'style="display: block; max-width: 22px"';
        pnm.addButton('options', [{
            id: 'view-info',
            label: `<svg ${iconStyle} viewBox="0 0 24 24">
            <path fill="currentColor" d="M15.07,11.25L14.17,12.17C13.45,12.89 13,13.5 13,15H11V14.5C11,13.39 11.45,12.39 12.17,11.67L13.41,10.41C13.78,10.05 14,9.55 14,9C14,7.89 13.1,7 12,7A2,2 0 0,0 10,9H8A4,4 0 0,1 12,5A4,4 0 0,1 16,9C16,9.88 15.64,10.67 15.07,11.25M13,19H11V17H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
        </svg>`,
            command: 'open-info',
            attributes: {
                'title': 'About',
                'data-tooltip-pos': 'bottom',
            },
        }]);

        const productId = document.getElementById('product_id').value;
        // Add save command
        cmdm.add('save-design', {
            run: function(editor, sender) {

                const html = editor.getHtml();
                const css = editor.getCss();

                saveDesign(productId, html, css);
            }
        });

        // Add save button
        const iconStyle2 = 'style="display: block; max-width: 22px"';
        pnm.addButton('options', [{
            id: 'saveDesign',
            label: `<svg fill="currentColor" height="17px" width="22px" version="1.1" id="Layer_1"
                    viewBox="0 0 502 502" xml:space="preserve">
                <g>
                    <g>
                        <g>
                            <path d="M492,0H10C4.477,0,0,4.477,0,10v424c0,2.652,1.054,5.196,2.929,7.071l58,58C62.804,500.946,65.348,502,68,502h424
                                c5.523,0,10-4.477,10-10V10C502,4.477,497.523,0,492,0z M86,20h330v240H86V20z M194.045,482H158.06v-67.589h35.985V482z
                                M313.239,482h-99.194v-77.589c0-5.523-4.477-10-10-10H148.06c-5.523,0-10,4.477-10,10V482h-17.925V381h193.104V482z
                                M381.866,482h-48.627V381h48.627V482z M482,482h-80.134V371c0-5.523-4.477-10-10-10h-68.627H110.134c-5.523,0-10,4.477-10,10
                                v111H72.142L20,429.858V20h46v250c0,5.523,4.477,10,10,10h350c5.523,0,10-4.477,10-10V20h46V482z"/>
                            <path d="M367.5,62H345c-5.523,0-10,4.477-10,10s4.477,10,10,10h22.5c5.523,0,10-4.477,10-10S373.023,62,367.5,62z"/>
                            <path d="M134.5,82H299c5.523,0,10-4.477,10-10s-4.477-10-10-10H134.5c-5.523,0-10,4.477-10,10S128.977,82,134.5,82z"/>
                            <path d="M367.5,129h-233c-5.523,0-10,4.477-10,10s4.477,10,10,10h233c5.523,0,10-4.477,10-10S373.023,129,367.5,129z"/>
                            <path d="M367.5,196h-233c-5.523,0-10,4.477-10,10s4.477,10,10,10h233c5.523,0,10-4.477,10-10S373.023,196,367.5,196z"/>
                        </g>
                    </g>
                </g>
                </svg>`,
            command: 'save-design',
            attributes: {
                'title': 'Save',
                'data-tooltip-pos': 'bottom',
            },
        }]);

        // Function to save the design using AJAX
        function saveDesign(productId, html, css) {

            fetch('{{ url('/store/save-design') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        // design: design,
                        html: html,
                        css: css,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Design saved successfully', data);
                    displayMessage('Design saved successfully.');
                })
                .catch(error => console.error('Error saving design:', error));
        }

        // Beautify tooltips
        [
            ['sw-visibility', 'Show Borders'],
            ['preview', 'Preview'],
            ['fullscreen', 'Fullscreen'],
            ['export-template', 'Export'],
            ['undo', 'Undo'],
            ['redo', 'Redo'],
            ['gjs-open-import-template', 'Import'],
            ['gjs-toggle-images', 'Toggle images'],
            ['canvas-clear', 'Clear canvas']
        ].forEach(function(item) {
            pnm.getButton('options', item[0]).set('attributes', {
                title: item[1],
                'data-tooltip-pos': 'bottom'
            });
        });
        // [
        //   ['open-sm', 'Style Manager'],
        //   ['open-layers', 'Layers'],
        //   ['open-blocks', 'Blocks']
        // ].forEach(function(item) {
        //   pnm.getButton('views', item[0]).set('attributes', { title: item[1], 'data-tooltip-pos': 'bottom', title2: item[1] });
        //   console.log('views', item[0], pnm.getButton('views', item[0]).get('attributes'))
        // });

        var titles = document.querySelectorAll('*[title]');
        for (var i = 0; i < titles.length; i++) {
            var el = titles[i];
            var title = el.getAttribute('title');
            title = title ? title.trim() : '';
            if (!title)
                break;
            el.setAttribute('data-tooltip', title);
            el.setAttribute('title', '');
        }

        // Update canvas-clear command
        cmdm.add('canvas-clear', function() {
            if (confirm('Are you sure to clean the canvas?')) {
                editor.runCommand('core:canvas-clear')
                setTimeout(function() {
                    localStorage.clear()
                }, 0)
                displayMessage('Design removed successfully.');
            }
        });

        // Do stuff on load
        editor.onReady(function() {
            // Show borders by default
            pnm.getButton('options', 'sw-visibility').set('active', 1);

            // Show logo with the version
            var logoCont = document.querySelector('.gjs-logo-cont');
            document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
            var logoPanel = document.querySelector('.gjs-pn-commands');
            logoPanel.appendChild(logoCont);

            // Wait for CKEDITOR load
            setTimeout(() => {
                if (CKEDITOR) {
                    CKEDITOR.dtd.$editable.a = 1;
                }
            }, 200);
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Get the product ID from the hidden input
            const product_Id = document.getElementById('product_id').value;

            loadDesign(product_Id);

            // Function to load the design using AJAX
            function loadDesign(product_Id) {
                fetch('{{ url('/store/get-design') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: JSON.stringify({
                            product_id: product_Id,
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.design) {
                            // Load the design into the editor
                            editor.setComponents(data.design.html);
                            editor.setStyle(data.design.css);
                            console.log('Design loaded successfully');
                            displayMessage("Design loaded successfully.");
                        } else {
                            console.log('No design found for the product');
                            displayErrorMessage('No design found for the template.');
                        }
                    })
                    .catch(error => console.error('Error loading design:', error));
            }
        });

        //send test mail
        // Function to save the design using AJAX
        var form = document.getElementById('test-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Fetch or submit data using AJAX
            fetch('{{ url('/sendTestEmail') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams(new FormData(form)),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response data
                    console.log(data.message);
                    displayMessage(data.message);
                })
                .catch(error => {
                    // Handle errors
                    console.error('Error:', error);
                    displayErrorMessage('Error: ' + error);
                });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }

        function displayErrorMessage(message) {
            toastr.error(message, 'Event');
        }
    </script>

</body>

</html>
