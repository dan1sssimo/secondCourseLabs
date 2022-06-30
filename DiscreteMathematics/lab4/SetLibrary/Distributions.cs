using System;
using System.Collections.Generic;

namespace SetLibrary
{
    static public class Distributions
    {
        static public float OrderedDistribution(float m, float n)
        {
            return Factorial(n) / Factorial(n - m);
        }

        static public float OrderedDistributionRep(float m, float n)
        {
            return MathF.Pow(n, m);
        }
        
        static public float UnorderedDistribution(float m, float n)
        {
            return Factorial(n) / (Factorial(m) * Factorial(n - m));
        }
        
        static public float UnorderedDistributionRep(float m, float n)
        {
            return UnorderedDistribution(m, n + m -1);
        }
        
        static public float Permutation(float n)
        {
            return Factorial(n);
        }
        
        static public float PermutationRep(List<float> numArr)
        {
            float sumOfElemets = 0;
            float multiplicationOfFactorials = 1;

            foreach (var elem in numArr) 
            {
                sumOfElemets += elem;
                multiplicationOfFactorials *= Factorial(elem);
            }

            return Factorial(sumOfElemets) / multiplicationOfFactorials;
        }

        static float Factorial(float n)
        {
            if (n <= 1) 
                return 1;
            return n * Factorial(n - 1);
        }
    }
}