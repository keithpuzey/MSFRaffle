describe('CDBU Modern Software Factory UI Test - EMEA Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://emea-preprod.cdbu.io');
    element(by.css('[name="Name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('I\'m In!')).click();
    });
});
