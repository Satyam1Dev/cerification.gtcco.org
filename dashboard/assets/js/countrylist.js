document.addEventListener('DOMContentLoaded', () => {
    const selectDrop = document.getElementById('countries');

    fetch('https://restcountries.com/v3.1/all')
      .then(res => res.json())
      .then(data => {
        if (Array.isArray(data)) {
          // Sort countries alphabetically by name
          data.sort((a, b) => {
            if (a.name.common < b.name.common) return -1;
            if (a.name.common > b.name.common) return 1;
            return 0;
          });

          // Populate the dropdown with sorted countries
          data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name.common;
            option.textContent = country.name.common;
            selectDrop.appendChild(option);
          });
        } else {
          console.error('Invalid data format received');
        }
      })
      .catch(err => {
        console.error('Error fetching countries:', err);
      });
  });