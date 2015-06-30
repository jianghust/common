// lazyload config

angular.module('app')
    /**
   * jQuery plugin config use ui-jq directive , config the js and css files that required
   * key: function name of the jQuery plugin
   * value: array of the css js file located
   */
  .constant('JQ_CONFIG', {
      easyPieChart:   [   '/static/static-common/lib/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js'],
      sparkline:      [   '/static/static-common/lib/jquery.sparkline/dist/jquery.sparkline.retina.js'],
      plot:           [   '/static/static-common/lib/flot/jquery.flot.js',
                          '/static/static-common/lib/flot/jquery.flot.pie.js', 
                          '/static/static-common/lib/flot/jquery.flot.resize.js',
                          '/static/static-common/lib/flot.tooltip/js/jquery.flot.tooltip.js',
                          '/static/static-common/lib/flot.orderbars/js/jquery.flot.orderBars.js',
                          '/static/static-common/lib/flot-spline/js/jquery.flot.spline.js'],
      moment:         [   '/static/static-common/lib/moment/moment.js'],
      screenfull:     [   '/static/static-common/lib/screenfull/dist/screenfull.min.js'],
      slimScroll:     [   '/static/static-common/lib/slimscroll/jquery.slimscroll.min.js'],
      sortable:       [   '/static/static-common/lib/html5sortable/jquery.sortable.js'],
      nestable:       [   '/static/static-common/lib/nestable/jquery.nestable.js',
                          '/static/static-common/lib/nestable/jquery.nestable.css'],
      filestyle:      [   '/static/static-common/lib/bootstrap-filestyle/src/bootstrap-filestyle.js'],
      slider:         [   '/static/static-common/lib/bootstrap-slider/bootstrap-slider.js',
                          '/static/static-common/lib/bootstrap-slider/bootstrap-slider.css'],
      chosen:         [   '/static/static-common/lib/chosen/chosen.jquery.min.js',
                          '/static/static-common/lib/bootstrap-chosen/bootstrap-chosen.css'],
      TouchSpin:      [   '/static/static-common/lib/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
                          '/static/static-common/lib/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'],
      wysiwyg:        [   '/static/static-common/lib/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
                          '/static/static-common/lib/bootstrap-wysiwyg/external/jquery.hotkeys.js'],
      dataTable:      [   '/static/static-common/lib/datatables/media/js/jquery.dataTables.min.js',
                          '/static/static-common/lib/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
                          '/static/static-common/lib/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
      vectorMap:      [   '/static/static-common/lib/bower-jvectormap/jquery-jvectormap-1.2.2.min.js', 
                          '/static/static-common/lib/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
                          '/static/static-common/lib/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
                          '/static/static-common/lib/bower-jvectormap/jquery-jvectormap-1.2.2.css'],
      footable:       [   '/static/static-common/lib/footable/dist/footable.all.min.js',
                          '/static/static-common/lib/footable/css/footable.core.css'],
      fullcalendar:   [   '/static/static-common/lib/moment/moment.js',
                          '/static/static-common/lib/fullcalendar/dist/fullcalendar.min.js',
                          '/static/static-common/lib/fullcalendar/dist/fullcalendar.css',
                          '/static/static-common/lib/fullcalendar/dist/fullcalendar.theme.css'],
      daterangepicker:[   '/static/static-common/lib/moment/moment.js',
                          '/static/static-common/lib/bootstrap-daterangepicker/daterangepicker.js',
                          '/static/static-common/lib/bootstrap-daterangepicker/daterangepicker-bs3.css'],
      tagsinput:      [   '/static/static-common/lib/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
                          '/static/static-common/lib/bootstrap-tagsinput/dist/bootstrap-tagsinput.css']
                      
    }
  )
  // oclazyload config
  .config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
      // We configure ocLazyLoad to use the lib script.js as the async loader
      $ocLazyLoadProvider.config({
          debug:  true,
          events: true,
          modules: [
              {
                  name: 'ngGrid',
                  files: [
                      '/static/static-common/lib/ng-grid/build/ng-grid.min.js',
                      '/static/static-common/lib/ng-grid/ng-grid.min.css',
                      '/static/static-common/lib/ng-grid/ng-grid.bootstrap.css'
                  ]
              },
              {
                  name: 'ui.grid',
                  files: [
                      '/static/static-common/lib/angular-ui-grid/ui-grid.min.js',
                      '/static/static-common/lib/angular-ui-grid/ui-grid.min.css',
                      '/static/static-common/lib/angular-ui-grid/ui-grid.bootstrap.css'
                  ]
              },
              {
                  name: 'ui.select',
                  files: [
                      '/static/static-common/lib/angular-ui-select/dist/select.min.js',
                      '/static/static-common/lib/angular-ui-select/dist/select.min.css'
                  ]
              },
              {
                  name:'angularFileUpload',
                  files: [
                    '/static/static-common/lib/angular-file-upload/angular-file-upload.min.js'
                  ]
              },
              {
                  name:'ui.calendar',
                  files: ['/static/static-common/lib/angular-ui-calendar/src/calendar.js']
              },
              {
                  name: 'ngImgCrop',
                  files: [
                      '/static/static-common/lib/ngImgCrop/compile/minified/ng-img-crop.js',
                      '/static/static-common/lib/ngImgCrop/compile/minified/ng-img-crop.css'
                  ]
              },
              {
                  name: 'angularBootstrapNavTree',
                  files: [
                      '/static/static-common/lib/angular-bootstrap-nav-tree/dist/abn_tree_directive.js',
                      '/static/static-common/lib/angular-bootstrap-nav-tree/dist/abn_tree.css'
                  ]
              },
              {
                  name: 'toaster',
                  files: [
                      '/static/static-common/lib/angularjs-toaster/toaster.js',
                      '/static/static-common/lib/angularjs-toaster/toaster.css'
                  ]
              },
              {
                  name: 'textAngular',
                  files: [
                      '/static/static-common/lib/textAngular/dist/textAngular-sanitize.min.js',
                      '/static/static-common/lib/textAngular/dist/textAngular.min.js'
                  ]
              },
              {
                  name: 'vr.directives.slider',
                  files: [
                      '/static/static-common/lib/venturocket-angular-slider/build/angular-slider.min.js',
                      '/static/static-common/lib/venturocket-angular-slider/build/angular-slider.css'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular',
                  files: [
                      '/static/static-common/lib/videogular/videogular.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.controls',
                  files: [
                      '/static/static-common/lib/videogular-controls/controls.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.buffering',
                  files: [
                      '/static/static-common/lib/videogular-buffering/buffering.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.overlayplay',
                  files: [
                      '/static/static-common/lib/videogular-overlay-play/overlay-play.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.poster',
                  files: [
                      '/static/static-common/lib/videogular-poster/poster.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.imaads',
                  files: [
                      '/static/static-common/lib/videogular-ima-ads/ima-ads.min.js'
                  ]
              },
              {
                  name: 'xeditable',
                  files: [
                      '/static/static-common/lib/angular-xeditable/dist/js/xeditable.min.js',
                      '/static/static-common/lib/angular-xeditable/dist/css/xeditable.css'
                  ]
              },
              {
                  name: 'smart-table',
                  files: [
                      '/static/static-common/lib/angular-smart-table/dist/smart-table.min.js'
                  ]
              }
          ]
      });
  }])
;
