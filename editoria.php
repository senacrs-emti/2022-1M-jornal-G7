
    <?php
        include_once '_header.php';
    ?>  
    <main>
        <img id="propaganda" src="assets/img/propaganda-da-TIM.jpg" class="img-fluid" alt="...">
        <!-- Currency Converter  -->
    <h1 class="heading text-center display-2">
        Conversor de moedas</h1>
  
    <hr>
    <div class="container">
  
        <div class="main">
  
            <div class="form-group">
                <label for="oamount">
                   Quantidade à converter : 
                </label>
                <input type="text" 
                       class="form-control searchBox" 
                       placeholder="0.00" 
                       id="oamount">
            </div>
  
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Para</span>
                        </div>
                        <select class="form-control from" id="sel1">
                            <option value="">Escolha um …</option>
                            <option value="USD">USD</option>
                            <option value="AED">AED</option>
                            <option value="ARS">ARS</option>
                            <option value="AUD">AUD</option>
                            <option value="BGN">BGN</option>
                            <option value="BRL">BRL</option>
                            <option value="BSD">BSD</option>
                            <option value="CAD">CAD</option>
                            <option value="CHF">CHF</option>
                            <option value="CLP">CLP</option>
                            <option value="CNY">CNY</option>
                            <option value="COP">COP</option>
                            <option value="CZK">CZK</option>
                            <option value="DKK">DKK</option>
                            <option value="DOP">DOP</option>
                            <option value="EGP">EGP</option>
                            <option value="EUR">EUR</option>
                            <option value="FJD">FJD</option>
                            <option value="GBP">GBP</option>
                            <option value="GTQ">GTQ</option>
                            <option value="HKD">HKD</option>
                            <option value="HRK">HRK</option>
                            <option value="HUF">HUF</option>
                            <option value="IDR">IDR</option>
                            <option value="ILS">ILS</option>
                            <option value="INR">INR</option>
                            <option value="ISK">ISK</option>
                            <option value="JPY">JPY</option>
                            <option value="KRW">KRW</option>
                            <option value="KZT">KZT</option>
                            <option value="MVR">MVR</option>
                            <option value="MXN">MXN</option>
                            <option value="MYR">MYR</option>
                            <option value="NOK">NOK</option>
                            <option value="NZD">NZD</option>
                            <option value="PAB">PAB</option>
                            <option value="PEN">PEN</option>
                            <option value="PHP">PHP</option>
                            <option value="PKR">PKR</option>
                            <option value="PLN">PLN</option>
                            <option value="PYG">PYG</option>
                            <option value="RON">RON</option>
                            <option value="RUB">RUB</option>
                            <option value="SAR">SAR</option>
                            <option value="SEK">SEK</option>
                            <option value="SGD">SGD</option>
                            <option value="THB">THB</option>
                            <option value="TRY">TRY</option>
                            <option value="TWD">TWD</option>
                            <option value="UAH">UAH</option>
                            <option value="UYU">UYU</option>
                            <option value="ZAR">ZAR</option>
                        </select>
                    </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">De</span>
                        </div>
                        <select class="form-control to" id="sel2">
                            <option value="">Escolha um …</option>
                            <option value="USD">USD</option>
                            <option value="AED">AED</option>
                            <option value="ARS">ARS</option>
                            <option value="AUD">AUD</option>
                            <option value="BGN">BGN</option>
                            <option value="BRL">BRL</option>
                            <option value="BSD">BSD</option>
                            <option value="CAD">CAD</option>
                            <option value="CHF">CHF</option>
                            <option value="CLP">CLP</option>
                            <option value="CNY">CNY</option>
                            <option value="COP">COP</option>
                            <option value="CZK">CZK</option>
                            <option value="DKK">DKK</option>
                            <option value="DOP">DOP</option>
                            <option value="EGP">EGP</option>
                            <option value="EUR">EUR</option>
                            <option value="FJD">FJD</option>
                            <option value="GBP">GBP</option>
                            <option value="GTQ">GTQ</option>
                            <option value="HKD">HKD</option>
                            <option value="HRK">HRK</option>
                            <option value="HUF">HUF</option>
                            <option value="IDR">IDR</option>
                            <option value="ILS">ILS</option>
                            <option value="INR">INR</option>
                            <option value="ISK">ISK</option>
                            <option value="JPY">JPY</option>
                            <option value="KRW">KRW</option>
                            <option value="KZT">KZT</option>
                            <option value="MVR">MVR</option>
                            <option value="MXN">MXN</option>
                            <option value="MYR">MYR</option>
                            <option value="NOK">NOK</option>
                            <option value="NZD">NZD</option>
                            <option value="PAB">PAB</option>
                            <option value="PEN">PEN</option>
                            <option value="PHP">PHP</option>
                            <option value="PKR">PKR</option>
                            <option value="PLN">PLN</option>
                            <option value="PYG">PYG</option>
                            <option value="RON">RON</option>
                            <option value="RUB">RUB</option>
                            <option value="SAR">SAR</option>
                            <option value="SEK">SEK</option>
                            <option value="SGD">SGD</option>
                            <option value="THB">THB</option>
                            <option value="TRY">TRY</option>
                            <option value="TWD">TWD</option>
                            <option value="UAH">UAH</option>
                            <option value="UYU">UYU</option>
                            <option value="ZAR">ZAR</option>
                        </select>
                    </div>
                </div>
            </div>
  
            <div class="text-center">
  
                <!-- convert button -->
                <button class="btn btn-primary convert m-2" 
                        type="submit">
                     Converter
              </button>
  
                <!-- reset button -->
                <button class="btn btn-primary m-2" 
                        onclick="clearVal()">
                   Resetar
              </button>
            </div>
  
        </div>
  
        <div id="finalAmount" class="text-center">
  
            <!-- Display the converted amount -->
            <h2>Quantidade convertida :
                <span class="finalValue" 
                      style="color:green;">
           </span>
            </h2>
        </div>
    </div>
        <hr>
        <div id='div5'>
            <h2 class='h2'>Como funciona a valorização das moedas?</h2>
            <p> Segundo Cristiane Quartaroli, economista do Banco Ourinvest, a valorização, ou desvalorização, das moedas ao redor do mundo acontece de forma comparativa à moeda norte-americana, o dólar. Ou seja, é medida a alta ou queda do dinheiro de determinado país em relação ao dólar.</p>
            <p>Essa oscilação acontece de acordo com a lei de oferta e demanda e representa a riqueza de um país. “Em suma, quando há uma valorização, é porque há muita moeda e altana compra de bens ou de serviços. A desvalorização pode ocorrer quando há baixa procura pela moeda local ou maior procura pela moeda estrangeira”, diz a economista.</p>
            <p>Além disso, ela ressalta que há outros fatores que entram na jogada. Política interna e contexto global, como conflitos, alta do petróleo, são itens que influenciam a variação cambial e impactam na precificação das moedas.</p>
            <h2 class='h2'>Qual a moeda mais valiosa do mundo?</h2>
            <p>Valendo mais de três vezes o dólar, com uma cotação média de US$ 3,30, a moeda mais valiosa do mundo é a Dinar, usada no Kuwait, conhecida pela sigla KWD. A explicação está na riqueza local: o petróleo. O Kuwait é um país exportador da commodity em dólar. Assim, muitas moedas americanas entram no seu mercado e precisam ser convertidas pelo Dinar, que não é tão impresso como os dólares americanos.</p>
        </div>
    </main>
<?php
    include_once "_footer.php";
?>