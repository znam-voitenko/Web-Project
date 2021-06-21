<?php
$mysql = new mysqli("localhost", "root", "root", "webproject");
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}

$sql = "SELECT * FROM PRICELIST";

?>
<!-- Wedo -->
        <section class="section">
            <div class="container">

                <div class="section__header">
                    <h3 class="section__suptitle">Service</h3>
                    <h2 class="section__title">Ціни за послуги</h2>
                    <div class="section__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="wedo">
                    <div class="wedo__item">
                        <img class="wedo__img" src="assets/images/wedo.jpg" alt="">

                        <div class="accordion accordion__left">
                            <div class="accordion__item" >
                                <div class="accordion__header active" data-collapse="#wedo_1">
                                    <img class="accordion__icon" src="assets/images/services/Maintenance.png" alt="">
                                    <div class="accordion__title">Технічне обслуговування</div>
                                </div>
                                <div class="accordion__content" id="wedo_1">
                                    <table class="table-content">
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM PRICELIST";
                                                    if($result = $mysql->query($sql)){
                                                        $rowsCount = $result->num_rows;                      
                                                        foreach($result as $row){
                                                            echo "<tr>";
                                                                echo "<td class=left-column>" .  $row["NAME"] . "</td>";
                                                                echo "<td class=right-column>" . $row["PRICE"] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        $result->free();
                                                    }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="accordion__item" >
                                <div class="accordion__header" data-collapse="#wedo_2">
                                    <img class="accordion__icon" src="assets/images/services/tire fitting.png" alt="">
                                    <div class="accordion__title">Шиномонтаж</div>
                                </div>
                                <div class="accordion__content" id="wedo_2">
                                    <p class="accordion__content">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>

                            <div class="accordion__item">
                                <div class="accordion__header" data-collapse="#wedo_3">
                                    <img class="accordion__icon"
                                        src="assets/images/services/refueling the air conditioner.png" alt="">
                                    <div class="accordion__title">Заправка кондиціонерів</div>
                                </div>
                                <div class="accordion__content" id="wedo_3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="accordion__item" >
                                <div class="accordion__header" data-collapse="#wedo_4">
                                    <img class="accordion__icon" src="assets/images/services/cooling system.png" alt="">
                                    <div class="accordion__title">Система охолодження</div>
                                </div>
                                <div class="accordion__content" id="wedo_4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wedo__item">

                        <div class="accordion">
                            <div class="accordion__item" >
                                <div class="accordion__header" data-collapse="#wedo_5">
                                    <img class="accordion__icon" src="assets/images/services/engine repair.png" alt="">
                                    <div class="accordion__title">Ремонт двигунів</div>
                                </div>
                                <div class="accordion__content" id="wedo_5">
                                    <table class="table-content">
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM PRICELIST002";
                                                    if($result = $mysql->query($sql)){
                                                        $rowsCount = $result->num_rows;                      
                                                        foreach($result as $row){
                                                            echo "<tr>";
                                                                echo "<td class=left-column>" .  $row["NAME"] . "</td>";
                                                                echo "<td class=right-column>" . $row["PRICE"] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        $result->free();
                                                    }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="accordion__item" >
                                <div class="accordion__header active" data-collapse="#wedo_6">
                                    <img class="accordion__icon" src="assets/images/services/undercarriage repair.png"
                                        alt="">
                                    <div class="accordion__title">Ремонт ходової</div>
                                </div>
                                <div class="accordion__content" id="wedo_6">
                                    <table>
                                        <tr>
                                            <td class="left-column">Діагностика двигуна</td>
                                            <td class="right-column">100 грн</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="accordion__item" >
                                <div class="accordion__header" data-collapse="#wedo_7">
                                    <img class="accordion__icon"
                                        src="assets/images/services/the collapse of convergence.png" alt="">
                                    <div class="accordion__title">Розвал-сходження</div>
                                </div>
                                <div class="accordion__content" id="wedo_7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="accordion__item">
                                <div class="accordion__header"  data-collapse="#wedo_8">
                                    <img class="accordion__icon" src="assets/images/services/computer diagnostics.png"
                                        alt="">
                                    <div class="accordion__title">Комп'ютерна діагностика</div>
                                </div>
                                <div class="accordion__content" id="wedo_8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="accordion__item" >
                                <div class="accordion__header" data-collapse="#wedo_9">
                                    <img class="accordion__icon" src="assets/images/services/brakes.png" alt="">
                                    <div class="accordion__title">Гальмівна система</div>
                                </div>
                                <div class="accordion__content" id="wedo_9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div><!-- /.accordion -->

                    </div><!-- /.wedo__item -->
                </div><!-- /.wedo -->

            </div>
        </section>