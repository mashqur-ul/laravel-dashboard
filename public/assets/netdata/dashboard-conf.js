// Net data dashboard configuration goes here
var netdataTheme = 'white';

/*global netdataNoDygraphs           *//* boolean,  disable dygraph charts
 *                                                  (default: false) */
/*global netdataNoSparklines         *//* boolean,  disable sparkline charts
 *                                                  (default: false) */
/*global netdataNoPeitys             *//* boolean,  disable peity charts
 *                                                  (default: false) */
/*global netdataNoGoogleCharts       *//* boolean,  disable google charts
 *                                                  (default: false) */
/*global netdataNoMorris             *//* boolean,  disable morris charts
 *                                                  (default: false) */
/*global netdataNoEasyPieChart       *//* boolean,  disable easypiechart charts
 *                                                  (default: false) */
/*global netdataNoGauge              *//* boolean,  disable gauge.js charts
 *                                                  (default: false) */
/*global netdataNoD3                 *//* boolean,  disable d3 charts
 *                                                  (default: false) */
/*global netdataNoC3                 *//* boolean,  disable c3 charts
 *                                                  (default: false) */
/*global netdataNoD3pie              *//* boolean,  disable d3pie charts
 *                                                  (default: false) */
/*global netdataNoBootstrap          *//* boolean,  disable bootstrap - disables help too
 *                                                  (default: false) */
var netdataNoBootstrap = true;
/*global netdataNoFontAwesome        *//* boolean,  disable fontawesome (do not load it)
 *                                                  (default: false) */
var netdataNoFontAwesome = true;
/*global netdataIcons                *//* object,   overwrite netdata fontawesome icons
 *                                                  (default: null) */
/*global netdataDontStart            *//* boolean,  do not start the thread to process the charts
 *                                                  (default: false) */
/*global netdataErrorCallback        *//* function, callback to be called when the dashboard encounters an error
 *                                                  (default: null) */
var netdataErrorCallback = function(){
    toastr.error("System metrics could not be loaded !");
}
/*global netdataRegistry:true        *//* boolean,  use the netdata registry
 *                                                  (default: false) */
/*global netdataNoRegistry           *//* boolean,  included only for compatibility with existing custom dashboard
 *                                                  (obsolete - do not use this any more) */
/*global netdataRegistryCallback     *//* function, callback that will be invoked with one param: the URLs from the registry
 *                                                  (default: null) */
/*global netdataShowHelp:true        *//* boolean,  disable charts help
 *                                                  (default: true) */
/*global netdataShowAlarms:true      *//* boolean,  enable alarms checks and notifications
 *                                                  (default: false) */
/*global netdataRegistryAfterMs:true *//* ms,       delay registry use at started
 *                                                  (default: 1500) */
/*global netdataCallback             *//* function, callback to be called when netdata is ready to start
 *                                                  (default: null)
 *                                                  netdata will be running while this is called
 *                                                  (call NETDATA.pause to stop it) */
/*global netdataPrepCallback         *//* function, callback to be called before netdata does anything else
 *                                                  (default: null) */
/*global netdataServer               *//* string,   the URL of the netdata server to use
 *                                                  (default: the URL the page is hosted at) */
/*global netdataServerStatic         *//* string,   the URL of the netdata server to use for static files
 *                                                  (default: netdataServer) */
/*global netdataSnapshotData         *//* object,   a netdata snapshot loaded
 *                                                  (default: null) */
/*global netdataAlarmsRecipients     *//* array,    an array of alarm recipients to show notifications for
 *                                                  (default: null) */
/*global netdataAlarmsRemember       *//* boolen,   keep our position in the alarm log at browser local storage
 *                                                  (default: true) */
/*global netdataAlarmsActiveCallback *//* function, a hook for the alarm logs
 *                                                  (default: undefined) */
/*global netdataAlarmsNotifCallback  *//* function, a hook for alarm notifications
 *                                                  (default: undefined) */
/*global netdataIntersectionObserver *//* boolean,  enable or disable the use of intersection observer
 *                                                  (default: true) */
/*global netdataCheckXSS             *//* boolean,  enable or disable checking for XSS issues
 *                                                  (default: false) */
