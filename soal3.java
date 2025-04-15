import java.util.*;

class Crow{
    public String name;
    public int age;
    public String breed;
    
    public Crow(String nm, int ag, String br){
        this.name = nm;
        this.age =  ag;
        this.breed = br;
    }
    
    public String toString(){
        return "Crow{name = '" + this.name +"', age = "+ this.age + ", breed = '"+ this.breed +"'}";
    }
}
class Main {
    public static void main(String[] args) {
        List<Crow> test =  new ArrayList<>();
        test.add(new Crow("Belle",3,"Angus"));
        test.add(new Crow("Anna",2,"Holstein"));
        
        test.sort((a,b) -> {
            int nameComp = a.name.compareTo(b.name);
            if (nameComp != 0 ) return nameComp;
            
            int ageComp = Integer.compare(a.age,b.age);
            if (ageComp != 0 ) return ageComp;
            
            return a.breed.compareTo(b.breed);
            
        });
        
        for(Crow crow : test){
            System.out.println(crow);
        }
    }
}