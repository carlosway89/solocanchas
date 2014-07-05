 define([
     'router',
     'globals',
     'beans',
     'channel'
     ], function(AppRouter,Globals,Beans,Channel){
     var initialize = function(){
         var beans = new Beans;
         var debug = false;
         var that = this;
         
         
         Parse.initialize('xdLEwFZLHdiIXJHpuI0scD67SQcGUuFS2xo4KUYW','T3RUJeCKPmsvQ7VROzvM6TXW9YkmGWpVJcAlbpr7');


        AppRouter.initialize(); 
  
    };

     return {
         initialize: initialize
     };
     // What we return here will be used by other modules
});