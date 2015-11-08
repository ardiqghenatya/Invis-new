app.service('indexService', function(){
   var index

  var setIndex = function(intData) {
      index = intData
  };

  var getIndex = function(){
      return index;
  };

  return {
    setIndex: setIndex,
    getIndex: getIndex
  };
})