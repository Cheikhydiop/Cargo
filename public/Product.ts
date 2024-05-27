export  abstract class Product {
    public label: string;
    public weight: number;
  
    constructor(label: string, weight: number) {
      this.label = label;
      this.weight = weight;
    }
  
    abstract info(): void;
  
    get getWeight(): number {
      return this.weight;
    }
  
    set setWeight(weight: number) {
      this.weight = weight;
    }
  
    get getLabel(): string {
      return this.label;
    }
  
    set setLabel(label: string) {
      this.label = label;
    }
  }
export class FoodProduct extends Product {
    info(): void {
      console.log(`Produit alimentaire: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  
export  class ChemicalProduct extends Product {
    private toxicityLevel: number;
  
    constructor(label: string, weight: number, toxicityLevel: number) {
      super(label, weight);
      this.toxicityLevel = toxicityLevel;
    }
  
    info(): void {
      console.log(`Produit chimique: ${this.label}, Poids: ${this.weight}kg, Degré de toxicité: ${this.toxicityLevel}`);
    }
  
    get getToxicityLevel(): number {
      return this.toxicityLevel;
    }
  
    set setToxicityLevel(toxicityLevel: number) {
      this.toxicityLevel = toxicityLevel;
    }
  }
  
export abstract class MaterialProduct extends Product {
    constructor(label: string, weight: number) {
      super(label, weight);
    }
  
    info(): void {
      console.log(`Produit matériel: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  
  export class FragileProduct extends MaterialProduct {
    info(): void {
      console.log(`Produit fragile: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
  
  export class UnbreakableProduct extends MaterialProduct {
    info(): void {
      console.log(`Produit incassable: ${this.label}, Poids: ${this.weight}kg`);
    }
  }
