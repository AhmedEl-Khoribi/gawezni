<!DOCTYPE HTML>
<html>
<head>
<title>هتجوز </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Day Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/visitor/css/bootstrap.css" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png">

  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">


<!--Custom-Theme-files-->
    <link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>
</head>
<body >
    <!--start-home-->


  @include('visitor.template.nav')

<br>
<br>
    <div class="container">
    <h1 style="color: #f067ae">المعجبون بك</h1>
<center>
<div class="info-box bg-red" style="width:30%">
    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
    
    <div class="info-box-content">
      <span class="info-box-text">المعجبين</span>
      <span class="info-box-number">{{ $in_friends->count() }}</span>
    
      <div class="progress">
        <div class="progress-bar" style="width: 20%"></div>
      </div>
      <!--<span class="progress-description">-->
      <!--  20% زيادة في اخر30 يوم-->
      <!--    </span>-->
    </div>
    <!-- /.info-box-content -->
</div>
</center>
        <div class="row">
            <div class="col-sm-12">
                
                <table class="table table-striped" id="myTable" data-freezecolumns="2" style="direction: rtl">
                    <thead style="color: #f067ae">
                        <tr>
                            <th rowspan="2">الاسم</th>
                            <th rowspan="2"></th>
                            <th colspan="3">تاريخ الاعجاب</th>
                            <th colspan="3">الدولة</th>
                        </tr>
                        <tr>
                            <th>اليوم</th>
                            <th>الشهر</th>
                            <th>السنه</th>
                            <th>الدوله</th>
                            <th>المدينة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($in_friends as $likers)
                        <tr>
                            @php
                                $liker = \App\Client::where('id', $likers->client_id)->first();
                            @endphp
                            <td><a href="/client/profile/{{ $liker->id }}">{{ $liker->username }}</a></td>
                            <td><img src="/files/users/{{ $liker->image }}" width="50px"></td>
                            @php
                                $date = date_parse($liker->dob);
                            @endphp
                            <td>{{ $date['day'] }}</td>
                            <td>{{ $date['month'] }}</td>
                            <td>{{ $date['year'] }}</td>
                            <td>{{ $liker->city->country->name }}</td>
                            <td>{{ $liker->city->name }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    @include('visitor.template.footer')
            


<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script>
    
    $(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
    </script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script>
/*
    project: tbltable v0.1a
    author: @smiling.smit
    updated: 22-01-2018

    tbltable plugin for extended table options. designed for bootstrap

    1. Sticky header
        freezethead (boolean, default: false)
    2. Editable cells (not ready)
        editable (boolean or object {index: type}, default: false)
    3. Search/filter Table
        search (boolean, default: false)
    4. Sorting (not ready)
        sortable (boolean or object {index: boolean}, default: false)

    * requires jQuery & bootstrap css
    * & yes, there must be a 'thead'
*/

(function ($) {
    $.fn.tbltable = function (settings) {

        const key_esc = 27; // KeyboardEvent.which value for Escape (Esc) key
        const key_dlt = 46; // KeyboardEvent.which value for Delete key
        const key_enter = 13; // KeyboardEvent.which value for Enter key
        const key_tab = 9; // KeyboardEvent.which value for tab key
        const key_left = 37; // KeyboardEvent.which value for left-arrow key
        const key_up = 38; // KeyboardEvent.which value for up-arrow key
        const key_right = 39; // KeyboardEvent.which value for right-arrow key
        const key_down = 40; // KeyboardEvent.which value for down-arrow key

        var defaults = {
            checkbox: false,
            editable: false,
            freezecolumns: 0,
            freezethead: false,
            paging: false,
            search: false,
            sortable: false,
        };

        if (settings) { $.extend(defaults, settings); }

        // freezethead
        function freezeThead(table) {
            var tbl = table,
                tclone = tbl.clone();
            $('#' + tbl.attr("id") + '_thead_clone').parent().remove();

            var theadWrapper = $('<div class="freeze-thead-wrapper" />');
            theadWrapper.css({
                'position': 'fixed',
                'top': 0,
                'left': tbl.offset().left,
                'right': $(window).width() - (tbl.offset().left + tbl.parent().width()),
                'background': '#fff',
                'box-shadow': '0 2px 15px rgba(20,20,20,0.2)',
                'overflow': 'hidden',
                'display': 'none',
            });

            tclone.addClass('freeze-thead')
                .attr('id', tbl.attr("id") + '_thead_clone')
                .css('margin', 0)
                .find('tbody').remove();
            tbl.find('thead th').each(function (index) {
                tclone.find('thead th').eq(index).css({
                    'min-width': $(this).outerWidth(),
                    'height': $(this).outerHeight()
                });
            });
            tclone.insertAfter(tbl).wrap(theadWrapper);
            tbl.parent().on('scroll', function () {
                tclone.parent().scrollLeft($(this).scrollLeft());
            });

            function affix() {
                if ($(window).scrollTop() > tbl.offset().top && $(window).scrollTop() < tbl.offset().top + tbl.height() - 80) {
                    tclone.parent().show();
                    tclone.parent().scrollLeft($(tbl.parent()).scrollLeft());
                } else {
                    tclone.parent().hide();
                }
            }

            affix();
            $(window).on('scroll', function () {
                affix();
            });
            // console.log('freezeThead() is enabled.');
        }

        // freezecolumns
        function freezeColumn(table) {
            var tbl = table,
                tclone = tbl.clone(),
                columns = 0;

            if (defaults.freezecolumns) {
                columns = defaults.freezecolumns;
            } else if (tbl.attr('data-freezecolumns')) {
                columns = table.attr('data-freezecolumns');
            }

            $('#' + tbl.attr("id") + '_column_clone').parent().remove();

            var columnWrapper = $('<div class="freeze-column-wrapper" />');
            columnWrapper.css({
                'position': 'absolute',
                'top': 0,
                'left': 0,
                'background': '#fff',
                'border-right': '1px solid #ccc',
                'box-shadow': '2px 0 5px rgba(20,20,20,0.2)',
                'overflow': 'hidden',
                'z-index': '1',
                // 'display': 'none',
            });

            tclone.addClass('freeze-column')
                .attr('id', tbl.attr("id") + '_column_clone')
            // .css('margin', 0);

            $.each(tclone.data(), function (i) {
                tclone.removeAttr("data-" + i);
            });

            tclone.find('thead tr:not(:first-child)').remove();
            tclone.find('tr th, tr td').each(function (index) {
                var cell = $(this),
                    cellNo = $(this).index() + 1;

                cell.css({
                    'height': tbl.find('tr:first-child th, tr td').eq(index).outerHeight(),
                    'min-width': tbl.find('tr:first-child th, tr td').eq(index).outerWidth(),
                    // 'width': tbl.find('tr:first-child th, tr td').eq(index).outerWidth(),
                    'max-width': tbl.find('tr:first-child th, tr td').eq(index).outerWidth(),
                });
                if (cellNo > columns) {
                    cell.remove();
                }
            });
            tclone.find('thead tr th').attr({
                'rowspan': '',
                'colspan': '',
            })
            tclone.insertAfter(tbl).wrap(columnWrapper);
            tclone.parent().width(tclone.outerWidth());


            if (tbl.attr('data-frezethead') == 'true' || defaults.freezethead === true) {
                var theadClone = tclone.clone();

                // no need to check remove clone, as we remove parent directly
                var theadCloneWrapper = $('<div class="freeze-column-thead-wrapper" />');
                theadCloneWrapper.css({
                    'position': 'fixed',
                    'left': tbl.offset().left,
                    'top': 0,
                    'background': '#fff',
                    'box-shadow': '0 2px 5px rgba(20,20,20,0.2)',
                    'max-height': tclone.find('thead').height(),
                    'z-index': 2,
                    'display': 'none',
                });

                // alert(tclone.outerWidth())
                theadClone.find('tbody').remove();
                theadClone.toggleClass('freeze-column freeze-column-thead')
                    .attr('id', tbl.attr("id") + '_column_thead_clone')
                    .css({
                        'width': tclone.outerWidth(),
                        'height': tclone.find('thead').height(),
                        'max-height': tclone.find('thead').height(),
                    });

                theadClone.insertBefore(tclone).wrap(theadCloneWrapper);

                function affix() {
                    if ($(window).scrollTop() > tbl.offset().top && $(window).scrollTop() < tbl.offset().top + tbl.height() - 80) {
                        theadClone.parent().show();
                    } else {
                        theadClone.parent().hide();
                    }
                }
                affix();
                $(window).on('scroll', function () {
                    affix();
                });
            }

            tclone.parent().hide();

            tbl.parent().on('scroll', function () {
                tclone.parent().css('left', $(this).scrollLeft());
                if ($(this).scrollLeft() > 0) {
                    tclone.parent().show();
                } else {
                    tclone.parent().hide();
                }
            });
        }

        // editable
        function ediTable(table, typeDefObj) {
            var tbl = table,
                rows = tbl.find('tbody tr'),
                cells = tbl.find('tbody td');

            // set editable types in data attributes
            function getType(cell) {
                var type = 'text';
                if (typeDefObj) {
                    if (typeof (typeDefObj[cell.index()]) == 'object') {
                        type = 'select';
                    } else {
                        type = typeDefObj[cell.index()];
                    }
                }
                return type;
            }

            rows.find('td').each(function () {
                var $cell = $(this),
                    type = getType($cell),
                    text = $cell.text();

                // if cell is editable set data-attributes & add class 'editable'
                if (type) {
                    $cell.attr({
                        'data-editable': type,
                        'data-text-old': text,
                    }).addClass('editable');
                }
            });

            function createControl(cell) {
                var input,
                    type = cell.attr('data-editable');
                if (type == 'select') {
                    input = $('<select class="table-control" />');
                    var options = typeDefObj[cell.index()];
                    input.append($('<option>', { value: '0', text: 'Select' }));
                    $.each(options, function (key, value) {
                        input.append($('<option>', { value: key, text: value }));
                    });
                    input.find('option:contains(' + cell.text() + ')').attr('selected', true);
                } else {
                    input = $('<input type="' + type + '" class="table-control" />');
                    input.val(cell.text());
                }
                cell.attr('data-text-new', cell.text());
                input.css({
                    'position': 'absolute',
                    'top': 0,
                    'left': 0,
                    'width': '100%',
                    'height': '100%',
                });
                return input;
            }

            function updateOp(cell) {
                console.log(cell);
                var cell_value;
                if (cell.attr('data-editable') == 'select') {
                    cell_value = cell.find('select option:selected').text();
                } else {
                    cell_value = cell.find('input').val();
                }
                cell.empty();
                cell.text(cell_value);
                cell.attr('data-text-new', cell_value).removeAttr('data-text-editing').css('position', '');
            }

            function revertOp(cell) {
                var cell_value_old = cell.attr('data-text-old'),
                    cell_value_new = cell.attr('data-text-new'),
                    cell_value_current = cell.attr('data-text-editing');

                cell.empty();
                cell.text(cell_value_new).removeAttr('data-text-editing').css('position', '');
            }

            function activateEditing(cell) {
                // create input
                var $elm = cell,
                    input = createControl($elm);
                if (input !== undefined) {
                    $elm.removeClass('ready').addClass('editing').css('position', 'relative');
                    $elm.empty();
                    input.appendTo($elm).focus();
                }
            }

            var editableCells = $('td.editable');
            $(document).on({
                click: function (e) {
                    var $elm = $(e.target);
                    if ($elm.hasClass('editable') && !$elm.hasClass('editing')) {
                        editableCells.removeClass('ready');
                        $elm.addClass('ready');
                    }
                },

                dblclick: function (e) {
                    var $elm = $(e.target);
                    editableCells.removeClass('ready');
                    var editingCells = $('td.editing');
                    // update all editing cells if double clicked anywhere in page
                    editingCells.each(function () {
                        updateOp($(this));
                    }).removeClass('editing');
                    // if double clicked on editable cell in page acitvate editing
                    if ($elm.hasClass('editable')) {
                        activateEditing($elm);
                    }
                },

                keyup: function (e) {
                    var key = (e.keyCode ? e.keyCode : e.which),
                        cell = $('.editing'),
                        cell_value_current;

                    // set current editinng value to 'data-text-editing'
                    if (cell.attr('data-editable') == 'select') {
                        cell_value_current = cell.find('select option:selected').text();
                    } else {
                        cell_value_current = cell.find('input').val();
                    }
                    cell.attr('data-text-editing', cell_value_current);

                    switch (key) {
                        case key_esc:
                            // revert operation
                            revertOp(cell);
                            cell.removeClass('editing')
                            if ($('td.ready').length === 0) {
                                cell.addClass('ready');
                            };
                            break;

                        case key_enter:
                        case key_tab:
                            e.preventDefault();
                            e.stopPropagation();
                            // update operation
                            if ($('td.editing').length > 0) {
                                updateOp(cell);
                                cell.removeClass('editing');
                                if ($('td.ready').length === 0) {
                                    cell.addClass('ready');
                                } else {
                                    activateEditing($('.ready'));
                                }
                            } else {
                                if (key == key_enter) {
                                    activateEditing($('.ready'));
                                }
                            }
                            break;

                        case key_up:
                        case key_down:
                        case key_left:
                        case key_right:
                            // e.preventDefault();
                            // e.stopPropagation();
                            // move to new cell
                            break;

                        case key_dlt:
                            // e.preventDefault();
                            // e.stopPropagation();
                            $('.ready').text('');
                            break;
                    }
                }
            });

            if (tbl.attr('data-frezethead') == 'true' || defaults.freezethead === true) {
                freezeThead(tbl);
            }
            // console.log('ediTable() is enabled.');
        }

        // searchtable
        function searchTable(table) {
            var tbl = table,
                toolbar = $('<div class="tbl-table-toolbar form-group" />'),
                input = $('<input type="search" class="table-control form-control" />'),
                inputGroup = $('<div class="input-group" />'),
                label = $('<span class="input-group-addon"><i class="fa  fa-search" style="color:black;margin:-5px"></i></span>');

            toolbar.attr('id', tbl.attr("id") + '_toolbar');
            input.attr('id', tbl.attr("id") + '_filter');

            label.appendTo(inputGroup);
            input.appendTo(inputGroup);
            inputGroup.appendTo(toolbar);
            toolbar.insertBefore($('#' + tbl.attr('id') + '_wrapper'));


            function filter(q) {
                // var term = q.replace(/ /gi, '|');
                var term = q;
                table.find('tbody tr').each(function () {
                    var len = $(this).text().search(new RegExp(term, "i"));
                    if (len < 0) {
                        $(this).addClass('hidden');
                    } else {
                        $(this).removeClass('hidden');
                    }
                });
            }

            $('input').on('keyup change', function (e) {
                var key = (e.keyCode ? e.keyCode : e.which),
                    query = $(this).val().trim();
                if (key == key_esc) {
                    $(this).val('');
                    table.find('tbody tr').removeClass('hidden');
                } else {
                    filter(query);
                }
            });

            if (tbl.attr('data-frezethead') == 'true' || defaults.freezethead === true) {
                freezeThead(tbl);
            }
            // console.log('searchTable() is enabled.');
        }

        // sortable
        function sorTable(table) {
            var tbl = table,
                $sortable = tbl.find('thead th').addClass('sortable');
            $sortable.each(function (column) {
                $(this).click(function () {
                    var findSortKey = function ($cell) {
                        return $cell.find('.sort-key').text().toUpperCase() + ' ' + $cell.text().toUpperCase();
                    };
                    var sortDirection = $(this).is('.sorted-asc') ? -1 : 1;

                    // get the rows with data for sorting
                    var $rows = $(this).closest('table').find('tbody tr').get();

                    // loop through all the rows and find
                    $.each($rows, function (index, row) {
                        row.sortKey = findSortKey($(row).children('td').eq(column));
                    });

                    // compare and sort the rows alphabetically
                    $rows.sort(function (a, b) {
                        if (a.sortKey < b.sortKey) return -sortDirection;
                        if (a.sortKey > b.sortKey) return sortDirection;
                        return 0;
                    });

                    // add the rows in the correct order to the bottom of the table
                    $.each($rows, function (index, row) {
                        $('tbody').append(row);
                        row.sortKey = null;
                    });

                    // identify the column sort order
                    $('th').removeClass('sorted-asc sorted-desc');
                    var $sortHead = $('th').filter(':nth-child(' + (column + 1) + ')');
                    if (sortDirection == 1) {
                        $sortHead.addClass('sorted-asc');
                    } else {
                        $sortHead.addClass('sorted-desc');
                    }

                    // identify the column to be sorted by
                    $('td').removeClass('sorted')
                        .filter(':nth-child(' + (column + 1) + ')')
                        .addClass('sorted');
                });
            });
            if (tbl.attr('data-freezecolumns') > 0 || defaults.freezecolumns > 0) {
                freezeColumn(tbl);
            }
            if (tbl.attr('data-frezethead') == 'true' || defaults.freezethead === true) {
                freezeThead(tbl);
            }
        }

        return this.each(function () {
            var $elm = $(this);
            // check if table has thead
            if ($elm.find('thead').length < 1) {
                console.log('thead is needed to use this plugin.');
                return;
            } else {
                var mainWrapper = $('<div class="tbl-table-wrapper table-responsive" />');
                mainWrapper.css({
                    'position': 'relative',
                    'border': '1px solid #ccc',
                    'border-radius': '4px',
                    'margin-bottom': '30px',
                });
                mainWrapper.attr('id', $elm.attr('id') + '_wrapper');
                $elm.wrap(mainWrapper);

                if ($elm.attr('data-frezethead') == 'true' || defaults.freezethead === true) {
                    freezeThead($elm);
                }
                if ($elm.attr('data-table-editable') == 'true' || defaults.editable === true) {
                    ediTable($elm);
                }
                if (typeof (defaults.editable) === 'object') {
                    ediTable($elm, defaults.editable);
                }
                if ($elm.attr('data-search') == 'true' || defaults.search === true) {
                    searchTable($elm);
                }
                if ($elm.attr('data-sortable') == 'true' || defaults.sortable === true) {
                    sorTable($elm);
                }
                if ($elm.attr('data-freezecolumns') > 0 || defaults.freezecolumns > 0) {
                    freezeColumn($elm);
                }
            }
        });
    };
})(jQuery);


$('#myTable').tbltable({
    freezethead: true,
    search: true,
    sortable: true,
    // editable: true,
    editable: {
        2: 'text',
        3: 'number',
        4: 'number',
        5: 'number',
        6: {
            'm': 'Male',
            'f': 'Female',
        },
        8: 'text',
    },
});
    </script>
                        
                                
                                
                                


</body>
</html>