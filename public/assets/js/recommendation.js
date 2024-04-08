

  // Function to show recommendation based on the record
  function showRecommendation(item, record, recommendationId) {
    var recommendation = document.getElementById(recommendationId);
    if (record === 'No') {
      switch (item) {
        case 'Sanitary Permit':
          recommendation.innerHTML = 'Recommendation for Sanitary Permit';
          break;
        case 'Health Certificate':
          recommendation.innerHTML = 'Recommendation for Health Certificate';
          break;
        // Add cases for other items as needed
        default:
          recommendation.innerHTML = 'No recommendation available';
      }
    } else {
      recommendation.innerHTML = ''; // Clear recommendation if record is not 'No'
    }
  }

  // Call the function for each item
  showRecommendation('Sanitary Permit', '{{ $getRecord->sanitary_permit }}', 'recommendation1');
  showRecommendation('Health Certificate', '{{ $getRecord->health_certificate }}', 'recommendation2');
  // Call for other items as needed

