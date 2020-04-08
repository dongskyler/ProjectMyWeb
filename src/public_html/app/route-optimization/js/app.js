// api_key = 'AIzaSyCpXLEfMiVNZq5JEW6J1GlIFsLnh412Ekg';

$('#route-opt-form').submit(function(e) {
  console.log('Submit activated!');

  // Prevent reload page
  e.preventDefault();

  var origin = $("#route-opt-input").val().split('\n');
  origin = origin.filter(item => item);
  // console.log(origin);

  // var origin = ['Houston, Texas',
  //  'Denver, Colorado',
  //  'Dallas, Texas'];
    
  // Test case: Generate an array of all permutations
  var numDestinations = origin.length-1; // for example, 3 destinations, excluding the origin
  TestRoute = RouteComb(numDestinations); // Construct an object RouteComb

  var js_file = document.createElement('script');
  js_file.type = 'text/javascript';
  js_file.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCpXLEfMiVNZq5JEW6J1GlIFsLnh412Ekg&callback=getDistanceMatrix';
  document.getElementsByTagName('head')[0].appendChild(js_file);

  destination = origin;
  travelTime = 0;
  minTravelTime = 0;
  minTravelTime_i = 0;

    console.log('getGoogleTravelTime activated!');

    var service = new google.maps.DistanceMatrixService();

    service.getDistanceMatrix(
    {
        origins: origin,
        destinations: destination,
        travelMode: 'DRIVING',
        // transitOptions: TransitOptions,
        // drivingOptions: DrivingOptions,
        // unitSystem: UnitSystem,
        // avoidHighways: Boolean,
        // avoidTolls: Boolean,
    }, callback);

    function callback(response, status) {
      console.log('Callback activated!');
      if (status == 'OK') {
        var origins = response.originAddresses;
        var destinations = response.destinationAddresses;

        // Add travel time of the first pair
        for (i=0; i<TestRoute.comb.length; ++i) {
            travelTime = 0;
            for (j=0; j<TestRoute.comb[0].length-1; ++j) {
            travelTime += response.rows[TestRoute.comb[i][j]].elements[TestRoute.comb[i][j+1]].duration.value;
            }
            if (i==0) {
            minTravelTime = travelTime;
            }
            else if (travelTime < minTravelTime) {
            minTravelTime = travelTime;
            minTravelTime_i = i;
            }
        }
        
        // console.log(minTravelTime);
        // console.log(minTravelTime_i);
        // console.log(TestRoute.comb[minTravelTime_i]);
        // console.log(origin[0]);
        // TestRoute.comb[minTravelTime_i].forEach((origin.[])=>console.log(`Travel route is ${origin.[]}`));
        optimalRoute = (TestRoute.comb[minTravelTime_i].map((index) => origin[index]));
        console.log(`The optimal travel route is: ${optimalRoute.join(' -> ')}.`);
        // travelTimes.forEach((travelTime)=>console.log(`Travel Time is ${travelTime}`));
      }
      else {
          alert('Google Map API was not successful due to: ' + status);
      }
    }

  function RouteComb(numDestn) {
    console.log('RouteComb activated!');
    const RouteComb = {}; // Create an object
    RouteComb.numDestn = numDestn;
    RouteComb.dest = [];
    RouteComb.comb = [];

    for (var i=1; i<=numDestn; ++i) {
    RouteComb.dest.push(i);
    }
    // Generate an array of destination indices from 1 to n, as 0 is reserved for
    // the origin.

    RouteComb.comb = permutator(RouteComb.dest);
    // Generate all permutations

    var origin = 0;
    for (var i=0; i<RouteComb.comb.length; RouteComb.comb[i].unshift(0), ++i);
    // Add origin 0 to the array

    return RouteComb;
  }

  function permutator(inputArr) {
  // Generate all permutations
    console.log('permutator activated!');
    var results = [];
    function permute(arr, memo) {
    var cur, memo = memo || [];
    
    for (var i=0; i<arr.length; ++i) {
        cur = arr.splice(i, 1);
        if (arr.length === 0) {
        results.push(memo.concat(cur));
        }
        permute(arr.slice(), memo.concat(cur));
        arr.splice(i, 0, cur[0]);
    }
    return results;
    }
    return permute(inputArr);
  }
});
