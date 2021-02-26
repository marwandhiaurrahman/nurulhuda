// lazyload config
var MODULE_CONFIG = {
    easyPieChart:   [ 'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js' ],
    sparkline:      [ 'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/jquery.sparkline/dist/jquery.sparkline.retina.js' ],
    plot:           [ 'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot/jquery.flot.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot/jquery.flot.resize.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot/jquery.flot.pie.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot.tooltip/js/jquery.flot.tooltip.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot-spline/js/jquery.flot.spline.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/flot.orderbars/js/jquery.flot.orderBars.js'],
    vectorMap:      [ 'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/bower-jvectormap/jquery-jvectormap-1.2.2.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/bower-jvectormap/jquery-jvectormap.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/bower-jvectormap/jquery-jvectormap-us-aea-en.js' ],
    dataTable:      [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/datatables/media/js/jquery.dataTables.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
    footable:       [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/footable/dist/footable.all.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/footable/css/footable.core.css'
                    ],
    screenfull:     [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/screenfull/dist/screenfull.min.js'
                    ],
    sortable:       [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/html.sortable/dist/html.sortable.min.js'
                    ],
    nestable:       [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/nestable/jquery.nestable.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/nestable/jquery.nestable.js'
                    ],
    summernote:     [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/summernote/dist/summernote.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/summernote/dist/summernote.js'
                    ],
    parsley:        [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/parsleyjs/dist/parsley.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/parsleyjs/dist/parsley.min.js'
                    ],
    select2:        [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/select2/dist/css/select2.min.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.4.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/select2/dist/js/select2.min.js'
                    ],
    datetimepicker: [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.dark.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/moment/moment.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'
                    ],
    chart:          [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/echarts/build/dist/echarts-all.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/echarts/build/dist/theme.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/echarts/build/dist/jquery.echarts.js'
                    ],
    bootstrapWizard:[
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
                    ],
    fullCalendar:   [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/moment/moment.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/fullcalendar/dist/fullcalendar.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/fullcalendar/dist/fullcalendar.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/jquery/fullcalendar/dist/fullcalendar.theme.css',
                      'https://nurulhuda.studionya.com/nurulhuda/public/scripts/plugins/calendar.js'
                    ],
    dropzone:       [
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/dropzone/dist/min/dropzone.min.js',
                      'https://nurulhuda.studionya.com/nurulhuda/public/libs/js/dropzone/dist/min/dropzone.min.css'
                    ]
  };
