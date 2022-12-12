import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.util.Random;

import static java.lang.Thread.sleep;
import static org.junit.Assert.assertTrue;

public class ShopAutomation {
    WebDriver driver;
    Random rand;
    JavascriptExecutor js;
    WebDriverWait wait;

    @Before
    public void setUp() {
        System.setProperty("webdriver.chrome.driver", "resources/chromedriver.exe");
        ChromeOptions options = new ChromeOptions()
                .addArguments("--ignore-ssl-errors=yes")
                .addArguments("--ignore-certificate-errors");
        driver = new ChromeDriver(options);
        rand = new Random();
        js = (JavascriptExecutor) driver;
        wait = new WebDriverWait(driver,25);
    }

    @After
    public void tearDown() {
        driver.quit();
    }

    @Test
    public void buyProducts() throws InterruptedException {
        driver.get("https://localhost/");
        driver.manage().window().maximize();

        // DODANIE 5 PRDUKTOW Z KATEGORII PIERWSZEJ (produkty powiazane - home accessories)
        driver.findElement(By.xpath("/html/body/main/header/div[2]/div/div[1]/div[1]/h1/a")).click();
        for(int i = 1 ; i < 6; i++) {
            driver.findElement(By.xpath("/html/body/main/section/div/div/section/section/section/a")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div[2]/section/div[2]/ul/li[1]/h5/a")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div[2]/section/section/div[3]/div[1]/div[" + i + "]/article/div/div[1]/a")).click();
            int quantity = rand.nextInt(3) + 1;
            for(int j = 0 ; j < quantity; j++)
                driver.findElement(By.xpath("/html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[1]/div/span[3]/button[1]")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[2]/button")).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.xpath("/html/body/div[1]/div/div/div[2]/div/div[2]/div/div/a")));
            driver.findElement(By.xpath("/html/body/div[1]/div/div/div[2]/div/div[2]/div/div/a")).click();
            driver.findElement(By.xpath("/html/body/main/header/div[2]/div/div[1]/div[1]/a")).click();
        }

        // DODANIE 5 PRDUKTOW Z KATEGORII DRUGIEJ (art)
        driver.findElement(By.xpath("/html/body/main/header/div[2]/div/div[1]/div[1]/h1/a")).click();
        for(int i = 1 ; i < 6; i++) {
            driver.findElement(By.xpath("/html/body/main/section/div/div/section/section/section/a")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div[2]/section/div[2]/ul/li[2]/h5/a")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div[2]/section/section/div[3]/div[1]/div[" + i + "]/article/div/div[1]/a")).click();
            int quantity = rand.nextInt(3) + 1;
            for(int j = 0 ; j < quantity; j++)
                driver.findElement(By.xpath("/html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[1]/div/span[3]/button[1]")).click();
            driver.findElement(By.xpath("/html/body/main/section/div/div/section/div[1]/div[2]/div[2]/div[2]/form/div[2]/div/div[2]/button")).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.xpath("/html/body/div[1]/div/div/div[2]/div/div[2]/div/div/a")));
            driver.findElement(By.xpath("/html/body/div[1]/div/div/div[2]/div/div[2]/div/div/a")).click();
            driver.findElement(By.xpath("/html/body/main/header/div[2]/div/div[1]/div[1]/a")).click();
        }

        // PRZEJSCIE DO SEKCJI KOSZYK
        driver.findElement(By.xpath("/html/body/main/header/nav/div/div/div[1]/div[2]/div[2]/div/div/a")).click();

        // USUNIECIE Z KOSZYKA PIERWSZEGO ELEMENTU
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/div/div[2]/ul/li[1]/div/div[3]/div/div[3]/div/a")).click();

        // PRZEJSCIE DO REALIZACJI ZAMOWIENIA
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[2]/div[1]/div[2]/div/a")).click();

        // USTAWIENIE POLA NAZWA KONTAKTU
        driver.findElement(By.id("field-id_gender-1")).click();

        // WPISANIE IMIENIA
        WebElement first_name = driver.findElement(By.id("field-firstname"));
        first_name.clear();
        first_name.sendKeys("Hallo");

        // WPISANIE NAZWISKA
        WebElement last_name = driver.findElement(By.id("field-lastname"));
        last_name.clear();
        last_name.sendKeys("User");

        // WPISANIE MAILA
        WebElement email = driver.findElement(By.id("field-email"));
        email.clear();
        email.sendKeys("user10@mail.com");

        // WPISANIE HASLA
        WebElement password = driver.findElement(By.id("field-password"));
        password.clear();
        password.sendKeys("password123");

        // WPISANIE DATY URODZENIA
        WebElement birthday = driver.findElement(By.id("field-birthday"));
        birthday.clear();
        birthday.sendKeys("2001-07-01");

        // ZAZNACZENIE DRUGIEJ OPCJI
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[1]/div/div[2]/div[1]/form/div/div[8]/div[1]/span/label/input")).click();

        // ZAZNACZENIE TRZECIEJ OPCJI
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[1]/div/div[2]/div[1]/form/div/div[9]/div[1]/span/label/input")).click();

        // ZAZNACZENIE CZWARTEJ OPCJI
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[1]/div/div[2]/div[1]/form/div/div[10]/div[1]/span/label/input")).click();

        // DALEJ
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[1]/div/div[2]/div[1]/form/footer/button")).click();

        // WPISANIE ADRESU
        WebElement address1 = driver.findElement(By.id("field-address1"));
        address1.clear();
        address1.sendKeys("Good Street");

        // WPISANIE KODU POCZTOWEGO
        WebElement postcode = driver.findElement(By.id("field-postcode"));
        postcode.clear();
        postcode.sendKeys("36-144");

        // WPISANIE MIASTA
        WebElement city = driver.findElement(By.id("field-city"));
        city.clear();
        city.sendKeys("Warszawa");

        // DALEJ
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[2]/div/div/form/div/div/footer/button")).click();

        // WYBRANIE PIERWSZEJ OPCJI ODBIORU
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[3]/div/div[2]/form/div/div[1]/div[1]/div/span/span")).click();

        // DALEJ
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[3]/div/div[2]/form/button")).click();

        // ZAZNACZENIE PLACENIA PRZY ODBIORZE
        // TRZEBA DODAC OPCJE PLACENIA PRZY ODBIORZE
        driver.findElement(By.id("payment-option-1")).click();

        // ZGODA NA WARUNKI UMOWY
        driver.findElement(By.id("conditions_to_approve[terms-and-conditions]")).click();

        // ZLOZ ZAMOWIENIE
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/div/div[1]/section[4]/div/div[3]/div[1]/button")).click();

        // PRZEJSCIE DO KONTA UZYTKOWNIKA
        driver.findElement(By.xpath("/html/body/main/header/nav/div/div/div[1]/div[2]/div[1]/div/a[2]")).click();

        // PRZEJSCIE DO HISTORII I SZCZEGOLOW ZAMOWIEN
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/section/div/div/a[3]")).click();

        // SPRAWDZENIE CZY ZAMOWIENIE JEST ZLOZONE
        String text = driver.findElement(By.xpath("/html/body/main/section/div/div/section/section/table/tbody/tr/td[4]/span")).getText();
        assertTrue(text.contains("Oczekiwanie na płatność przelewem"));

        // PRZEJSCIE DO SZCZEGOLOW ZAMOWIENIA
        driver.findElement(By.xpath("/html/body/main/section/div/div/section/section/table/tbody/tr/td[6]/a[1]")).click();
        sleep(1000);
    }
}