let transactions = [
    { date: '2023-06-24', description: 'Payment received', amount: 50.00 },
    { date: '2023-06-23', description: 'Online purchase', amount: -25.00 },
    { date: '2023-06-22', description: 'Deposit', amount: 100.00 }
  ];
  
  // Variables to track daily withdrawal limit
  const withdrawalLimit = 100.00; // Change the limit as per your requirement
  let totalWithdrawalToday = 0.00;
  
  // Function to display the account balance
  function displayBalance(amount) {
    const balanceElement = document.getElementById('balanceAmount');
    balanceElement.textContent = '$' + amount.toFixed(2);
  }
  
  // Function to display the transaction history
  function displayTransactions(transactions) {
    const transactionList = document.getElementById('transactionList');
    transactionList.innerHTML = ''; // Clear previous transaction items
  
    transactions.forEach(transaction => {
      const listItem = document.createElement('li');
      const transactionDate = document.createElement('span');
      transactionDate.textContent = transaction.date;
      listItem.appendChild(transactionDate);
  
      const transactionDescription = document.createElement('span');
      transactionDescription.textContent = transaction.description;
      listItem.appendChild(transactionDescription);
  
      const transactionAmount = document.createElement('span');
      transactionAmount.textContent = '$' + transaction.amount.toFixed(2);
      listItem.appendChild(transactionAmount);
  
      transactionList.appendChild(listItem);
    });
  }
  
  // Function to add a new transaction
  function addTransaction(date, description, amount) {
    const newTransaction = { date: date, description: description, amount: amount };
    transactions.push(newTransaction);
    displayTransactions(transactions);
  }
  
  // Function to handle the withdrawal form submission
  function handleWithdrawalFormSubmit(event) {
    event.preventDefault();
  
    const amountInput = document.getElementById('amount');
    const amount = parseFloat(amountInput.value);
  
    // Validate the withdrawal amount
    if (isNaN(amount) || amount <= 0) {
      alert('Please enter a valid withdrawal amount.');
      return;
    }
  
    // Check if the withdrawal exceeds the daily limit
    if (totalWithdrawalToday + amount > withdrawalLimit) {
      alert('Withdrawal limit exceeded for today.');
      return;
    }
  
    // Perform withdrawal logic here
    // You can send an API request to your Laravel backend to process the withdrawal
    // and handle the email notification functionality server-side
  
    // For demonstration purposes, let's add a mock transaction with negative amount
    addTransaction(getCurrentDate(), 'Withdrawal', -amount);
  
    // Update the total withdrawal for today
    totalWithdrawalToday += amount;
  
    // Reset the form
    amountInput.value = '';
  }
  
  // Utility function to get the current date in YYYY-MM-DD format
  function getCurrentDate() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }
  
  // Sample initial account balance
  const initialBalance = 0.00;
  
  // Display the initial account balance and transactions
  displayBalance(initialBalance);
  displayTransactions(transactions);
  
  // Add event listener to the withdrawal form submission
  const withdrawalForm = document.getElementById('withdrawalForm');
  withdrawalForm.addEventListener('submit', handleWithdrawalFormSubmit);




  






  