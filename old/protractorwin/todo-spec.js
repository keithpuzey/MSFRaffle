describe('CA Raffle UI Test - Win Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://win-preprod.us-east-1.elasticbeanstalk.com/index.php');
    element(by.css('[name="Name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('Submit')).click();
    });
});
