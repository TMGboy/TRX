	// This function calculates the rating class based on sn and ln values.
    function getRatingClass(sn, ln) {
        // Special case: ln is 0.
        if (ln === 0) {
          // If both are zero, use 0; otherwise, use 10.
          return sn === 0 ? "r0" : "r10";
        }
        // Calculate the ratio multiplied by 10 and round it.
        let rating = Math.round((sn / ln) * 10);
        // Cap the rating at 10.
        if (rating > 10) rating = 10;
        return "r" + rating;
      }
      
      // When the document is ready, process each row.
      document.addEventListener("DOMContentLoaded", function() {
        // Adjust the selector as needed (here we assume rows are in #ratings).
        const rows = document.querySelectorAll("tr.tlz");
        rows.forEach(row => {
          // Find the elements containing the numbers.
          const snEl = row.querySelector(".sn");
          const lnEl = row.querySelector(".ln");
          // Find the target <div> that should receive the rating class.
          const ratingDiv = row.querySelector(".rating div");
          if (snEl && lnEl && ratingDiv) {
            // Parse the numbers (defaulting to 0 if the parse fails).
            const sn = parseFloat(snEl.textContent) || 0;
            const ln = parseFloat(lnEl.textContent) || 0;
            // Get the proper class (e.g., "r7", "r10", etc.).
            const rxClass = getRatingClass(sn, ln);
            // Set the class on the target div.
            ratingDiv.className = rxClass;
          }
        });
      });
      