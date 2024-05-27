var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Carguaison = /** @class */ (function () {
    function Carguaison(distance) {
        this.products = [];
        this.distance = distance;
    }
    Carguaison.prototype.ajoutProduit = function (product) {
        if (this.products.length >= 10) {
            console.log("La cargaison est pleine, impossible d'ajouter plus de produits.");
            return;
        }
        if (!this.isProductAllowed(product)) {
            console.log("Ce produit ne peut pas être ajouté à cette cargaison.");
            return;
        }
        this.products.push(product);
        console.log("Produit ajout\u00E9. Montant total de la cargaison : ".concat(this.sommeTotal()));
    };
    Carguaison.prototype.sommeTotal = function () {
        var _this = this;
        return this.products.reduce(function (total, product) { return total + _this.calculFrais(product); }, 0);
    };
    Carguaison.prototype.nbProduit = function () {
        return this.products.length;
    };
    return Carguaison;
}());
var AerialCargo = /** @class */ (function (_super) {
    __extends(AerialCargo, _super);
    function AerialCargo() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    AerialCargo.prototype.isProductAllowed = function (product) {
        return !(product instanceof ChemicalProduct);
    };
    AerialCargo.prototype.calculFrais = function (product) {
        return 5000 + product.weight * 100;
    };
    return AerialCargo;
}(Carguaison));
var MaritimeCargo = /** @class */ (function (_super) {
    __extends(MaritimeCargo, _super);
    function MaritimeCargo() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    MaritimeCargo.prototype.isProductAllowed = function (product) {
        return !(product instanceof FragileProduct);
    };
    MaritimeCargo.prototype.calculFrais = function (product) {
        if (product instanceof ChemicalProduct) {
            return product.weight * 90;
        }
        return product.weight * 300;
    };
    return MaritimeCargo;
}(Carguaison));
var RoadCargo = /** @class */ (function (_super) {
    __extends(RoadCargo, _super);
    function RoadCargo() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    RoadCargo.prototype.isProductAllowed = function (product) {
        return true;
    };
    RoadCargo.prototype.calculFrais = function (product) {
        return product.weight * 100;
    };
    return RoadCargo;
}(Carguaison));
var Product = /** @class */ (function () {
    function Product(label, weight) {
        this.label = label;
        this.weight = weight;
    }
    Object.defineProperty(Product.prototype, "getWeight", {
        get: function () {
            return this.weight;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Product.prototype, "setWeight", {
        set: function (weight) {
            this.weight = weight;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Product.prototype, "getLabel", {
        get: function () {
            return this.label;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Product.prototype, "setLabel", {
        set: function (label) {
            this.label = label;
        },
        enumerable: false,
        configurable: true
    });
    return Product;
}());
var FoodProduct = /** @class */ (function (_super) {
    __extends(FoodProduct, _super);
    function FoodProduct() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    FoodProduct.prototype.info = function () {
        console.log("Produit alimentaire: ".concat(this.label, ", Poids: ").concat(this.weight, "kg"));
    };
    return FoodProduct;
}(Product));
var ChemicalProduct = /** @class */ (function (_super) {
    __extends(ChemicalProduct, _super);
    function ChemicalProduct(label, weight, toxicityLevel) {
        var _this = _super.call(this, label, weight) || this;
        _this.toxicityLevel = toxicityLevel;
        return _this;
    }
    ChemicalProduct.prototype.info = function () {
        console.log("Produit chimique: ".concat(this.label, ", Poids: ").concat(this.weight, "kg, Degr\u00E9 de toxicit\u00E9: ").concat(this.toxicityLevel));
    };
    Object.defineProperty(ChemicalProduct.prototype, "getToxicityLevel", {
        get: function () {
            return this.toxicityLevel;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(ChemicalProduct.prototype, "setToxicityLevel", {
        set: function (toxicityLevel) {
            this.toxicityLevel = toxicityLevel;
        },
        enumerable: false,
        configurable: true
    });
    return ChemicalProduct;
}(Product));
var MaterialProduct = /** @class */ (function (_super) {
    __extends(MaterialProduct, _super);
    function MaterialProduct(label, weight) {
        return _super.call(this, label, weight) || this;
    }
    MaterialProduct.prototype.info = function () {
        console.log("Produit mat\u00E9riel: ".concat(this.label, ", Poids: ").concat(this.weight, "kg"));
    };
    return MaterialProduct;
}(Product));
var FragileProduct = /** @class */ (function (_super) {
    __extends(FragileProduct, _super);
    function FragileProduct() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    FragileProduct.prototype.info = function () {
        console.log("Produit fragile: ".concat(this.label, ", Poids: ").concat(this.weight, "kg"));
    };
    return FragileProduct;
}(MaterialProduct));
var UnbreakableProduct = /** @class */ (function (_super) {
    __extends(UnbreakableProduct, _super);
    function UnbreakableProduct() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    UnbreakableProduct.prototype.info = function () {
        console.log("Produit incassable: ".concat(this.label, ", Poids: ").concat(this.weight, "kg"));
    };
    return UnbreakableProduct;
}(MaterialProduct));
var aerialCargo = new AerialCargo(1000);
var maritimeCargo = new MaritimeCargo(2000);
var roadCargo = new RoadCargo(1500);
var apple = new FoodProduct('Pomme', 2);
var chemicalX = new ChemicalProduct('Chimique X', 5, 3);
var fragileGlass = new FragileProduct('Verre', 1);
var unbreakableMetal = new UnbreakableProduct('Métal', 10);
aerialCargo.ajoutProduit(apple);
aerialCargo.ajoutProduit(chemicalX);
maritimeCargo.ajoutProduit(chemicalX);
maritimeCargo.ajoutProduit(fragileGlass); // Devrait afficher un message d'erreur
roadCargo.ajoutProduit(apple);
roadCargo.ajoutProduit(fragileGlass);
roadCargo.ajoutProduit(unbreakableMetal);
document.addEventListener("DOMContentLoaded", function () {
    var cargos = {};
    var cargoForm = document.getElementById('cargo-form');
    var productForm = document.getElementById('product-form');
    var cargoSelect = document.getElementById('cargo-select');
    var cargoList = document.getElementById('cargos');
    cargoForm.addEventListener('submit', function (e) {
        e.preventDefault();
        var type = document.getElementById('cargo-type').value;
        var distance = parseFloat(document.getElementById('distance').value);
        var cargo;
        switch (type) {
            case 'aerial':
                cargo = new AerialCargo(distance);
                break;
            case 'maritime':
                cargo = new MaritimeCargo(distance);
                break;
            case 'road':
                cargo = new RoadCargo(distance);
                break;
        }
        var cargoId = "cargo-".concat(Object.keys(cargos).length + 1);
        cargos[cargoId] = cargo;
        var option = document.createElement('option');
        option.value = cargoId;
        option.text = "Cargaison ".concat(cargoId);
        cargoSelect.add(option);
        updateCargoList();
    });
    productForm.addEventListener('submit', function (e) {
        e.preventDefault();
        var cargoId = cargoSelect.value;
        var type = document.getElementById('product-type').value;
        var label = document.getElementById('product-label').value;
        var weight = parseFloat(document.getElementById('product-weight').value);
        var product;
        switch (type) {
            case 'food':
                product = new FoodProduct(label, weight);
                break;
            case 'chemical':
                var toxicityLevel = parseFloat(document.getElementById('toxicity-level').value);
                product = new ChemicalProduct(label, weight, toxicityLevel);
                break;
            case 'fragile':
                product = new FragileProduct(label, weight);
                break;
            case 'unbreakable':
                product = new UnbreakableProduct(label, weight);
                break;
        }
        cargos[cargoId].ajoutProduit(product);
        updateCargoList();
    });
    var productTypeSelect = document.getElementById('product-type');
    productTypeSelect.addEventListener('change', function () {
        var toxicitySection = document.getElementById('toxicity-level-section');
        if (productTypeSelect.value === 'chemical') {
            toxicitySection.style.display = 'block';
        }
        else {
            toxicitySection.style.display = 'none';
        }
    });
    function updateCargoList() {
        cargoList.innerHTML = ' ';
        Object.keys(cargos).forEach(function (cargoId) {
            var cargo = cargos[cargoId];
            var listItem = document.createElement('li');
            listItem.textContent = "Cargaison ".concat(cargoId, ": ").concat(cargo.nbProduit(), " produits, Montant total: ").concat(cargo.sommeTotal(), "F");
            cargoList.appendChild(listItem);
        });
    }
});
