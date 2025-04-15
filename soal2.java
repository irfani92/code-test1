// Online Java Compiler
// Use this editor to write, compile and run your Java code online

class Main {
  public static void main(String[] args) {
     Animal animal = new Animal();
     animal.describeAnimal(new Lion("Simba",5));
     animal.describeAnimal(new Elephant("Elli",15));
  }
}

class Animal {
  public String name;
  public int age;
  
  public Animal(){
      
  }
  
  public Animal (String nm, int ag){
      this.name = nm;
      this.age = ag;
  }
  
  public String makeSound(){
      return "test";
  }
  
  public void describeAnimal(Animal anim){
      System.out.println(anim.name + " is "+ anim.age + " years old and makes a " + anim.makeSound() + " sound");
  }
}

class Lion extends Animal{
  public Lion(String n, int a){
      super(n,a);
  }
  
  public String makeSound(){
      return "roarrr";    
  }
}

class Elephant extends Animal{
  public Elephant(String n, int a){
      super(n,a);
  }
  
  public String makeSound(){
      return "trumpet";    
  }
}