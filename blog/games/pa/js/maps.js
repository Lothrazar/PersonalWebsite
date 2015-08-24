
 //todo constants
 Maps = {};
 
 Maps.list = [];
   var R=Rock.id, W=Wall.id, C=Coin.id, F=Fire.id,Z=Zombie.id,D=Water.id,S=Shallow.id,L=Lava.id,T=Bush.id,N=NPC.id,Y=Stairway.id;
   var G=Grass.id, O=WoodFloor.id;
   //D for deep water, S for shallow.
Maps.list[0] = 
 [
     [T,0,0,0,0,T,F,T,T,T,T,T,T,T,T,T,T,T,T,T,T,T,T,T,D,D,D,D,D,D,D,T,T,T,R,R,R,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,R,S,R,R] // 0
    ,[R,0,0,0,0,T,Z,0,0,0,0,0,0,0,0,0,0,0,0,D,D,S,S,S,S,S,S,S,S,S,R,R,R,R,T,T,T,L,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,0,0,0,0,0,S,S,S,0,0] // 1  
    ,[F,0,0,0,0,T,0,0,0,Z,0,0,0,0,0,0,0,0,0,D,S,S,S,S,S,S,R,R,R,S,R,R,R,R,R,T,L,L,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,S,S,S,S,S,R,0,0,0] // 2
    ,[R,0,0,0,0,T,T,0,0,0,0,0,0,0,0,T,0,0,0,D,0,0,0,S,0,0,0,0,S,S,S,0,Z,0,0,T,L,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,S,S,R,R,R,R,R,R,0,0] // 3
    ,[R,R,R,0,0,S,0,0,F,0,0,0,0,0,0,0,0,0,0,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,L,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,R,R,0,0,0,0,0,0] // 4
    ,[R,S,S,S,S,T,T,0,F,0,C,0,0,0,0,0,0,0,S,D,D,S,0,0,0,0,0,0,0,0,0,0,0,F,F,F,L,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,0,0,0,0,0,0,0,0,R] // 5
    ,[R,R,R,0,0,T,T,T,0,0,0,0,0,0,0,0,0,S,D,D,D,S,0,0,0,0,0,0,0,0,0,0,F,F,F,F,R,R,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,R] // 6
    ,[0,R,0,0,0,T,T,F,0,0,0,0,0,T,0,0,S,D,D,D,D,S,0,0,0,0,0,0,0,0,0,0,0,0,R,R,0,0,0,0,0,0,0,W,W,0,W,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,R] // 7
    ,[0,R,0,0,0,T,T,F,F,0,0,0,0,0,0,O,O,O,D,D,D,D,0,0,0,0,0,0,0,0,0,0,0,0,R,0,0,0,0,0,0,0,0,W,0,0,T,O,O,C,W,O,0,C,0,0,0,0,0,0,0,O,O,R] // 8
    ,[0,R,R,0,0,0,0,0,T,0,0,0,0,0,0,S,D,D,S,D,D,D,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,O,O,O,O,O,O,O,O,W,0,0,0,0,0,0,0,0,0,0,R] // 9
    ,[0,0,0,0,T,T,T,T,0,0,0,0,0,0,0,S,D,D,T,D,S,D,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,O,O,O,O,O,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0] // 10
    ,[0,0,0,Z,R,0,0,T,0,0,0,0,0,0,0,0,S,D,D,D,S,D,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,O,O,O,O,O,O,O,O,W,0,0,0,0,0,0,0,0,0,0,0] // 11
    ,[0,0,0,0,R,0,0,0,T,0,0,0,0,0,0,0,0,S,D,D,S,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,O,O,O,O,O,W,O,O,W,0,0,0,0,0,0,0,0,0,0,0] // 12
    ,[T,0,0,R,R,0,0,0,T,0,0,T,0,0,0,0,0,D,D,D,S,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,R,R,R,0,R,R,W,0,0,0,0,0,W,O,O,W,0,0,0,0,0,0,0,0,0,0,0] // 13
    ,[T,0,0,T,0,0,0,0,T,0,0,0,0,0,0,0,0,D,D,D,S,0,0,G,G,G,G,G,G,G,G,G,G,G,G,G,0,0,0,R,S,S,R,R,0,0,0,0,0,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0] // 14
    ,[T,0,0,R,R,N,0,0,T,0,0,0,0,0,R,0,D,D,G,G,D,S,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,R,S,S,S,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 15
    ,[T,0,0,0,T,0,0,T,T,0,0,0,0,0,0,0,D,D,G,D,S,S,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,R,R,R,R,R,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 16
    ,[T,G,G,G,G,G,G,T,0,0,0,0,0,0,0,0,D,S,G,G,S,S,S,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,R,R,R,R,R,R,R,R,R,R,R,R,0,0,0,0,0] // 17
    ,[T,T,T,T,T,T,T,T,T,0,0,0,0,0,0,S,D,G,G,G,S,S,D,D,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,R,R,R,R,0,0] // 18
    ,[T,T,T,T,0,0,0,0,T,0,0,0,0,0,0,D,D,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,R,R,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,R,R,R] // 19
    ,[T,0,0,0,F,0,0,0,0,0,0,0,0,0,S,D,0,0,0,0,Z,G,G,G,S,S,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,G,T,T,T,T,T,T,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T] // 20
    ,[T,0,0,0,0,F,0,0,0,0,0,R,0,0,D,D,0,0,0,0,0,0,C,0,0,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,T,T,T,T,T,T,0,0,0,0,0,0,0,0,0,0,0,0,T] // 21
    ,[T,R,0,F,F,0,L,0,0,0,0,0,0,0,D,D,0,0,0,0,0,0,0,0,0,S,D,D,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,W,W,W,T] // 22
    ,[T,R,R,R,L,L,L,0,0,0,0,0,0,S,D,0,0,0,C,0,0,0,0,0,0,0,0,D,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,W,W,W,W,W,T] // 23
    ,[T,T,T,T,T,0,0,0,0,0,0,0,S,S,0,0,0,0,0,0,R,0,0,0,0,0,0,D,D,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,T,T,0,0,0,0,0,0,0,W,W,W,W,W,T] // 24
    ,[T,T,T,T,T,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,D,D,R,R,R,R,R,R,0,0,0,0,0,0,0,0,0,R,R,R,R,0,T,T,0,0,0,0,W,W,0,0,W,W,W,R,T] // 25
    ,[T,0,0,0,0,0,0,0,0,0,0,0,0,Y,0,0,0,0,0,0,0,0,0,0,0,0,T,T,D,T,T,T,0,0,0,0,0,0,0,0,0,0,0,R,R,T,T,R,0,T,0,0,0,0,0,0,0,0,0,R,0,0,W,T] // 26
    ,[T,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,0,0,0,0,0,0,0,D,0,T,T,T,0,0,0,0,0,0,0,0,R,R,0,R,0,0,0,0,0,0,0,0,0,Z,0,0,0,R,R,0,0,C,W] // 27
    ,[T,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,S,S,Z,0,T,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,R,0,0,0,W,W] // 28
    ,[T,0,T,0,0,0,0,W,W,W,W,W,0,0,0,0,0,0,0,0,R,0,R,0,0,0,0,0,S,D,S,T,0,0,0,0,0,0,0,0,R,R,R,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,W] // 29
    ,[T,T,T,0,0,0,0,W,W,W,W,W,0,0,0,0,0,0,W,W,W,0,0,0,0,0,0,0,S,S,T,T,T,0,0,0,0,0,R,R,R,R,R,0,0,0,0,0,0,0,0,0,T,T,T,T,T,T,T,T,T,T,T,T] // 30
    ,[T,T,T,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,0,0,0,0,0,0,0,S,T,T,T,T,0,0,0,0,0,R,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W] // 31
 ];
 
 
 //1 is a stairway
Maps.list[1] =  
[
     [0,0,W,W,W,W,F,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W] // 0
    ,[0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 1  
    ,[F,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W,W,W,W] // 2
    ,[F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,W,W] // 3
    ,[F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 4
    ,[F,Z,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 5
    ,[W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W] // 6
    ,[W,0,0,0,0,F,F,F,0,0,0,0,0,0,0,0,0,0,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,W] // 8
    ,[W,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 9
    ,[W,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,L,L,L,0,0,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 7
    ,[W,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,L,L,L,0,0,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 7
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,L,L,L,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 10
    ,[W,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 11
    ,[W,0,0,0,0,0,0,0,0,0,0,T,T,0,0,0,0,0,0,L,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 12
    ,[W,0,0,0,0,0,0,0,0,0,0,T,F,0,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 13
    ,[W,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 14
    ,[W,0,0,0,0,0,0,0,0,0,0,0,F,0,0,0,0,0,0,0,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 15
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,L,L,0,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 16
    ,[W,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,L,L,L,0,0,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 17
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 18
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,W] // 19
    ,[W,0,0,0,F,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 20
    ,[W,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 21
    ,[W,W,0,F,F,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W] // 22
    ,[W,W,W,W,L,L,L,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 23
    ,[W,W,W,W,W,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 24
    ,[W,W,W,W,W,W,0,0,0,0,0,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,W,W,W,W,W] // 25
    ,[W,0,0,0,0,0,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 26
    ,[W,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,C,W] // 27
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 28
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,W] // 29
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W] // 30
    ,[W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W] // 31
];
Maps.list[2] =  
[
     [0,0,W,W,W,W,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 0
    ,[0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 1  
    ,[0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W,W,0,0] // 2
    ,[0,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,W,0] // 3
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 4
    ,[0,Z,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 5
    ,[0,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0] // 6
    ,[0,0,0,0,0,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0] // 8
    ,[0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 9
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 7
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,T,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 10
    ,[0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 11
    ,[0,0,0,0,0,0,0,0,0,0,0,T,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 12
    ,[0,0,0,0,0,0,0,0,0,0,0,T,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 13
    ,[0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 14
    ,[0,0,0,0,0,0,0,0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 15
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 16
    ,[0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 17
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 18
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0] // 19
    ,[0,0,0,0,F,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 20
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 21
    ,[0,W,0,F,F,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W] // 22
    ,[0,W,W,W,L,L,L,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 23
    ,[0,W,W,W,W,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 24
    ,[0,W,W,W,W,W,0,0,0,0,0,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,W,W,W,W,W] // 25
    ,[0,0,0,0,0,0,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 26
    ,[0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,C,W] // 27
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 28
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,W] // 29
    ,[0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,0,0,0,0] // 30
    ,[W,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 31
];

Maps.list[3] =  
[
     [0,0,W,W,W,W,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 0
    ,[0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 1  
    ,[0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W,W,0,0] // 2
    ,[0,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,W,0] // 3
    ,[0,0,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 4
    ,[0,Z,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 5
    ,[0,W,W,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0] // 6
    ,[0,0,0,0,0,F,F,F,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0] // 8
    ,[0,0,0,0,0,0,0,0,T,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 9
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,W,0,0,0,0,0,0,T,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 7
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,T,T,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 10
    ,[0,0,0,Z,0,0,0,0,0,0,0,0,0,W,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 11
    ,[0,0,0,0,0,0,0,0,0,0,0,T,T,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 12
    ,[0,0,0,0,0,0,0,0,0,0,0,T,F,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 13
    ,[0,0,0,0,0,0,0,T,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 14
    ,[0,0,0,0,0,0,0,0,0,0,0,0,F,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 15
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 16
    ,[0,0,0,0,0,0,0,0,0,0,0,0,T,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 17
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 18
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0] // 19
    ,[0,0,0,0,F,0,0,0,0,0,0,0,T,W,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 20
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 21
    ,[0,W,0,F,F,0,L,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W] // 22
    ,[0,W,W,W,L,L,L,0,0,0,L,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 23
    ,[0,T,T,W,W,0,0,0,0,0,0,L,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 24
    ,[0,T,T,W,W,W,0,0,0,0,0,L,L,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,W,W,W,W,W] // 25
    ,[0,0,0,0,0,0,0,0,0,0,0,0,L,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 26
    ,[0,0,0,0,0,C,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,C,W] // 27
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 28
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,W] // 29
    ,[0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,0,0,0,0] // 30
    ,[W,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 31
];

Maps.list[4] =  
[
     [0,0,W,W,W,W,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 0
    ,[0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 1  
    ,[0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,W,W,W,W,W,0,0] // 2
    ,[0,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W,W,Z,W,W,W,W,W,W,W,0] // 3
    ,[0,0,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W] // 4
    ,[0,Z,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 5
    ,[0,W,W,0,0,0,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,F,F,F,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0] // 6
    ,[0,0,0,0,0,F,F,F,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0] // 8
    ,[0,0,0,0,0,0,0,0,T,0,0,0,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 9
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,S,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 7
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,T,T,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 10
    ,[0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 11
    ,[0,0,0,0,0,0,0,0,0,0,0,T,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 12
    ,[0,0,0,0,0,0,0,0,0,0,0,T,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 13
    ,[0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 14
    ,[0,0,0,0,0,0,0,0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 15
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 16
    ,[0,0,0,0,0,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 17
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 18
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0] // 19
    ,[0,0,0,0,F,0,0,0,0,0,0,0,T,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 20
    ,[0,0,0,0,0,F,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] // 21
    ,[0,W,0,F,F,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W] // 22
    ,[0,W,W,W,L,L,L,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 23
    ,[0,T,T,W,W,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,W,W,W,W] // 24
    ,[0,T,T,W,W,W,0,0,0,0,0,L,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,W,W,W,W,W] // 25
    ,[0,0,0,0,0,0,0,0,0,0,0,0,L,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 26
    ,[0,0,0,0,0,C,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,C,W] // 27
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,Z,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 28
    ,[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,C,0,0,0,0,0,0,W,W] // 29
    ,[0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W,0,0,0,0,0,0] // 30
    ,[W,0,0,W,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,W,W] // 31
];
  //each map has a network in all four directions
  
Maps.network = [];
Maps.network[0] = {n:2,e:2,s:2,w:2};
Maps.network[2] = {n:0,e:0,s:0,w:0};
 
Maps.current = 0;

