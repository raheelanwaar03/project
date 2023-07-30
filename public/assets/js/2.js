// JavaScript code for the account page
    // Implement the necessary functionality here
    document.addEventListener("DOMContentLoaded", function() {
        // Get elements
        var balanceAmount = document.getElementById("balanceAmount");
        var rechargeForm = document.getElementById("rechargeForm");
        var rechargeAmountInput = document.getElementById("rechargeAmount");
        var packagesSection = document.getElementById("packagesSection");
      
        // Initialize account balance
        var accountBalance = 0.0;
      
        // Update account balance amount
        function updateAccountBalance(amount) {
          accountBalance += amount;
          balanceAmount.textContent = "$" + accountBalance.toFixed(2);
        }
      
        // Recharge form submit event handler
        rechargeForm.addEventListener("submit", function(event) {
          event.preventDefault();
          var rechargeAmount = parseFloat(rechargeAmountInput.value);
          if (!isNaN(rechargeAmount) && rechargeAmount > 0) {
            updateAccountBalance(rechargeAmount);
            rechargeAmountInput.value = "";
          }
        });
      
        // Recharge button click event handler
        var rechargeButtons = document.querySelectorAll(".recharge-buttons button");
        for (var i = 0; i < rechargeButtons.length; i++) {
          rechargeButtons[i].addEventListener("click", function() {
            var rechargeAmount = parseFloat(this.dataset.amount);
            if (!isNaN(rechargeAmount) && rechargeAmount > 0) {
              updateAccountBalance(rechargeAmount);
            }
          });
        }
      
        // Create package element
        function createPackageElement(name, isActive, startDate, endDate, earnings, price) {
          var packageElement = document.createElement("div");
          packageElement.classList.add("package");
          if (isActive) {
            packageElement.classList.add("active");
          } else {
            packageElement.classList.add("inactive");
          }
          packageElement.innerHTML = "<strong>" + name + "</strong><br>" +
            "Status: " + (isActive ? "Active" : "Inactive") + "<br>" +
            "Start Date: " + startDate + "<br>" +
            "End Date: " + endDate + "<br>" +
            "Earnings: $" + earnings.toFixed(2) + "<br>" +
            "Price: $" + price.toFixed(2);
      
          var packageActions = document.createElement("div");
          packageActions.classList.add("package-actions");
      
          var activateButton = document.createElement("button");
          activateButton.textContent = "Activate";
          activateButton.addEventListener("click", function() {
            if (!isActive) {
              if (accountBalance >= price) {
                packageElement.classList.remove("inactive");
                packageElement.classList.add("active");
                isActive = true;
                updateAccountBalance(-price);
              } else {
                alert("Insufficient account balance. Please recharge your account.");
              }
            }
          });
      
          var deactivateButton = document.createElement("button");
          deactivateButton.textContent = "Deactivate";
          deactivateButton.addEventListener("click", function() {
            if (isActive) {
              packageElement.classList.remove("active");
              packageElement.classList.add("inactive");
              isActive = false;
            }
          });
      
          var buyButton = document.createElement("button");
          buyButton.textContent = "Buy";
          buyButton.addEventListener("click", function() {
            if (accountBalance >= price) {
              updateAccountBalance(-price);
              // Redirect to the packages page
              window.location.href = "packages.html";
            } else {
              alert("Insufficient account balance. Please recharge your account.");
            }
          });
      
          packageActions.appendChild(activateButton);
          packageActions.appendChild(deactivateButton);
          packageActions.appendChild(buyButton);
      
          packageElement.appendChild(packageActions);
      
          packagesSection.appendChild(packageElement);
        }
      
        // Sample data for packages
        var packagesData = [
          { name: "Package 1", isActive: true, startDate: "2023-06-01", endDate: "2023-06-30", earnings: 50.0, price: 20.0 },
          { name: "Package 2", isActive: false, startDate: "2023-07-01", endDate: "2023-07-31", earnings: 75.0, price: 30.0 },
          { name: "Package 3", isActive: true, startDate: "2023-08-01", endDate: "2023-08-31", earnings: 100.0, price: 40.0 }
        ];
      
        // Display packages
        packagesData.forEach(function(package) {
          createPackageElement(package.name, package.isActive, package.startDate, package.endDate, package.earnings, package.price);
        });
      });